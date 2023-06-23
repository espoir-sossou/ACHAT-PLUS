<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validate_connectionPost extends FormRequest
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
            'email' => 'required|email',
            'passwd' => 'required|min:8',
        ];
    }
        /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'email.required' => 'veuillez saisir votre mail',
        'email.email' => 'saisir un mail valide',
        'passwd.required' => 'veuillez saisir votre mot de passe',
        'passwd.min' => 'le mot de passe doit contenir au moin 8 caracteres',
    ];
}

}
