<?php

namespace App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\Foundation\Http\FormRequest;

class ValidationFormrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *  @return bool
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
    public function rules() : array
    {
        return [
            'nom' => 'required|min:3',
            'email' => 'required|email',
        ];
        
    }

      
        
}
