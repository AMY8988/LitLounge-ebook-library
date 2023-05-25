<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'coverPhoto' => 'nullable|mimes:jpg,jpeg,png|file',
            'title' => 'required',
            'description' => 'required',
            'fileUpload' => 'nullable|file|mimes:pdf',
            'category_id' => 'exists:categories,id'
        ];
    }
}
