<?php

namespace App\Http\Requests\Tag;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
                'tag_name' => 'required|unique:tags,name',
            ];
        }else{
            $validation = [
                'tag_name' => 'required|unique:tags,name,' . $this->segment(3),
            ];
        }
        return $validation;
    }
}
