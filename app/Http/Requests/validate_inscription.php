<?php

namespace App\Http\Requests;

use App\Models\inscription;
use Illuminate\Foundation\Http\FormRequest;

class validate_inscription extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:inscriptions,email',
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
           'nom.required' => 'veuillez saisir votre nom',
           'prenom.required' => 'veuillez saisir votre prenom',
           'email.required' => 'veuillez saisir votre email',
           'email.unique' => 'Ce email a ete dejas utiliser',
           'passwd.required' => 'veuillez saisir votre mot de passe',
           'passwd.min' => 'le mot de passe doit contenir au moin 8 caracteres',
       ];
   }
}
