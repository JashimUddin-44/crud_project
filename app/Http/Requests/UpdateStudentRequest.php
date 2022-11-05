<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // 'name' => 'required|max:255',
            // 'roll' => 'required|unique:students|max:255',
            // 'registion' => 'required|max:255',
            // 'depatment' => 'required',
            // 'semester' => 'required|max:255',
            // 'session' => 'required|max:255',
            // 'phone' => 'required|max:255',
            // 'email' => 'required|max:80',
            // 'password' => 'required|min:6|max:12',
        ];
    }
}
