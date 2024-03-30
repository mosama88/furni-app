<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required|string|min:3|max:50',
            'lname' => 'required|string|min:3|max:50',
            'email' => 'required|email|min:3|max:50',
            'message' => 'nullable|string|min:10|max:150',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'fname.required'=>'خانة الاسم الاول مطلوبه' 
        ];
    }

}
