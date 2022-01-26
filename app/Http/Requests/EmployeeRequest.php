<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'company_id' => 'required|exists:companies,id',
            'name' => 'required|min:3|max:100',
            'surname' => 'required|min:3|max:100',
            'email' => 'required|email|unique:employees,email',
            'telephone' => 'required|min:9|numeric|unique:employees,telephone',
            'emp_start_date' => 'required',
        ];
    }
}
