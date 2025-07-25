<?php

namespace App\Http\Requests;

use App\Rules\MatchOldPassword;
use App\Rules\StrongPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class ChangePasswordRequest extends FormRequest
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
            'currentPassword' => ['required', new MatchOldPassword],
            'newPassword' => [
                'required', 
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                //->uncompromised()
            ],
            'confirmPassword' => ['same:newPassword'],
        ];
        return $validation;
    }
}
