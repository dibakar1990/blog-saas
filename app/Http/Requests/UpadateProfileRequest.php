<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpadateProfileRequest extends FormRequest
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
        $id = Auth::user()->id;
        $validation = [
           'name' => 'required',
            'userName' => 'required|unique:users,username,' .$id. ',id',
            'email' => 'required|unique:users,email,' .$id. ',id',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
        ];
        
        return $validation;
    }
}
