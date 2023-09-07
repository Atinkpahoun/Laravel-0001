<?php

namespace App\Http\Requests;
use APP\Http\Controllers\ArticleController;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'titre' => 'required| min:3',
            'description' => 'required|min:5'
        ];
    }
    public function message ()
    {
     return[
        'titre.required' => 'le titre est requis',
        'titre.min' => 'le titre doit avoir au moins 3 caractères',
        'description.required' => 'la description est requise',
        'description.min' => 'Au moins 5 caractères pour la description'
     ];

    }
}
?>