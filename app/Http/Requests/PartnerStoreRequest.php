<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerStoreRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string'],
            'realtor_id' => ['required', 'exists:realtors,id'],
            'user_id' => ['required', 'exists:users,id'],
        ];
    }
}
