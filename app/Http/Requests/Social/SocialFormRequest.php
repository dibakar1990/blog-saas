<?php

namespace App\Http\Requests\Social;

use Illuminate\Foundation\Http\FormRequest;

class SocialFormRequest extends FormRequest
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
                'social_name' => 'required|unique:socials,name',
                'social_link' => 'required',
            ];
        }else{
            $validation = [
                'social_name' => 'required|unique:socials,name,' . $this->segment(3),
                'social_link' => 'required',
            ];
        }
        return $validation;
    }
}
