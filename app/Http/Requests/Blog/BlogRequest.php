<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        if($this->method() == 'POST'){
            $validation = [
                'news_title' => 'required',
                'category' => 'required',
                'description' => 'required',
                'tags.*' => 'required',
                'file' => 'required|image|mimes:jpeg,png,jpg,svg|max:3072'
            ];
        }else{
            $validation = [
                'news_title' => 'required',
                'category' => 'required',
                'description' => 'required',
                'tags.*' => 'required',
                'file' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:3072'
            ];
        }
        return $validation;
    }
}
