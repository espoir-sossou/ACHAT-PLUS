<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class watchRequest extends FormRequest
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
            'imgs' => 'required|unique:watchs,imgs',
            'prix' => 'required',
            'description' => 'required',
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
        'imgs.required' => 'veuillez Seectioner une image',
        'prix.required' => 'Fixer un prix',
        'description.required' => 'Elaborer une petite description',
    ];
}

}
