<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCompanyRequest extends FormRequest
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
            'name' =>['required', 'min:3', 'max:100', Rule::unique('companies', 'name')->ignore($this->company)],
            'address' => 'required|min:3|max:100',
            'telephone' => 'required|min:10|numeric',
            'website' => 'required',
            'director' => 'required|min:3|max:100',
            'logo' => 'image'
        ];
    }
}
