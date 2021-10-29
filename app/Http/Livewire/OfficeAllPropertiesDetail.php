<?php

namespace App\Http\Livewire;

use App\Models\Office;
use Livewire\Component;
use App\Models\Realtor;
use App\Models\Properties;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OfficeAllPropertiesDetail extends Component
{
    use WithFileUploads;
    use AuthorizesRequests;

    public Office $office;
    public Properties $properties;
    public $officeRealtors = [];
    public $propertiesPhoto;
    public $uploadIteration = 0;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Properties';

    protected $rules = [
        'properties.name' => ['required', 'max:255', 'string'],
        'properties.realtor_id' => ['required', 'exists:realtors,id'],
        'propertiesPhoto' => ['nullable', 'file'],
    ];

    public function mount(Office $office)
    {
        $this->office = $office;
        $this->officeRealtors = Realtor::pluck('name', 'id');
        $this->resetPropertiesData();
    }

    public function resetPropertiesData()
    {
        $this->properties = new Properties();

        $this->propertiesPhoto = null;
        $this->properties->realtor_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newProperties()
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.office_all_properties.new_title');
        $this->resetPropertiesData();

        $this->showModal();
    }

    public function editProperties(Properties $properties)
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.office_all_properties.edit_title');
        $this->properties = $properties;

        $this->dispatchBrowserEvent('refresh');

        $this->showModal();
    }

    public function showModal()
    {
        $this->resetErrorBag();
        $this->showingModal = true;
    }

    public function hideModal()
    {
        $this->showingModal = false;
    }

    public function save()
    {
        $this->validate();

        if (!$this->properties->office_id) {
            $this->authorize('create', Properties::class);

            $this->properties->office_id = $this->office->id;
        } else {
            $this->authorize('update', $this->properties);
        }

        if ($this->propertiesPhoto) {
            $this->properties->photo = $this->propertiesPhoto->store('public');
        }

        $this->properties->save();

        $this->uploadIteration++;

        $this->hideModal();
    }

    public function destroySelected()
    {
        $this->authorize('delete-any', Properties::class);

        collect($this->selected)->each(function (string $id) {
            $properties = Properties::findOrFail($id);

            if ($properties->photo) {
                Storage::delete($properties->photo);
            }

            $properties->delete();
        });

        $this->selected = [];
        $this->allSelected = false;

        $this->resetPropertiesData();
    }

    public function toggleFullSelection()
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->office->allProperties as $properties) {
            array_push($this->selected, $properties->id);
        }
    }

    public function render()
    {
        return view('livewire.office-all-properties-detail', [
            'allProperties' => $this->office->allProperties()->paginate(20),
        ]);
    }
}
