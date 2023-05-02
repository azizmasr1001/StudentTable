<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => [
                'required',
                Rule::unique('students','emailaddress')->ignore($this->txtid, 'idstudents'),
                'email'
            ],
            'txtphone' => [
                'required',
                Rule::unique('students','phone')->ignore($this->txtid, 'idstudents'),
            ],
            'txtaddress' => 'required',
        ];

    }

    public function messages(): array
    {
        return[
            'txtfullname.required' => ':attribute Cannot Be Empty',
            'txtgender.required' => ':attribute Cannot Be Empty',

        ];
    }

    public function attributes(): array
    {
        return[
            'txtfullname' => 'Full Name',
            'txtgender' => 'Gender',
            'txtemail' => 'Email',
            'txtphone' => 'Phone Number',
            'txtaddress' => 'Address',
        ];
    }
}
