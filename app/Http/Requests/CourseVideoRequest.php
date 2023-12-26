<?php

namespace App\Http\Requests;

use Alaouy\Youtube\Rules\ValidYoutubeVideo;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CourseVideoRequest extends FormRequest
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
            'link' => 'required|max:255',
            // 'link' => ['bail', 'required', new ValidYoutubeVideo],
        ];
    }

    public function messages()
    {
        return [
            'link.required' => 'Link harus diisi.',
        ];
    }
}
