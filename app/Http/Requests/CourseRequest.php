<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'description' => 'required',
            'price' => 'required|integer',
            'thumbnail' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul harus diisi.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'thumbnail.required' => 'Thumbnail tidak boleh kosong',
            'description.required' => 'Deskripsi harus diisi.',
            'price.required' => 'Harga harus diisi.',
            'price.integer' => 'Harga harus berupa angka.',
            'category_id.required' => 'Kategori harus dipilih.',
            'category_id.integer' => 'Kategori harus berupa angka.',
        ];
    }
}
