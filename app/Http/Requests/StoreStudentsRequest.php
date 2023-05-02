<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;

class StoreStudentsRequest extends FormRequest
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
            'txtid' => 'required|unique:students,idstudents|min:5|max:7',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => 'required|email|unique:students,emailaddress',
            'txtphone' => 'required|numeric|unique:students,phone',
            'txtaddress' => 'required',
        ];

    }

    public function messages(): array
    {
        return[
            'txtid.required' => ':attribute Cannot Be Empty',
            'txtid.unique' => ':attribute Must Be Unique',
            'txtfullname.required' => ':attribute Cannot Be Empty',
            'txtgender.required' => ':attribute Cannot Be Empty',

        ];
    }

    public function attributes(): array
    {
        return[
            'txtid' => 'Student ID',
            'txtfullname' => 'Full Name',
            'txtgender' => 'Gender',
            'txtemail' => 'Email',
            'txtphone' => 'Phone Number',
            'txtaddress' => 'Address',
        ];
    }
}
