<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
        
        $validation = [
            'app_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'location' => 'required',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'fav_icon' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048'
        ];
        return $validation;
    }
}
