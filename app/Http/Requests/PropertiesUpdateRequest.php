<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertiesUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'office_id' => ['required', 'exists:offices,id'],
            'realtor_id' => ['required', 'exists:realtors,id'],
            'name' => ['required', 'max:255', 'string'],
            'photo' => ['nullable', 'file'],
        ];
    }
}
