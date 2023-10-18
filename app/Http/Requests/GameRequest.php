<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
        return [
            'title' => 'required|min:3',
            'producer' => 'required|max:30',
            'price' => 'required|numeric',
            'cover' => 'image|mimes:jpg,png,webp',
            'description' => 'required|max:300',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Devi inserire il titolo del videogame',
            'title.min' => 'Il titolo deve essere almeno di 3 caratteri',
            'producer.required' => 'Devi inserire il produttore del videogame',
            'cover.image' => "Il file deve essere un'immagine",
        ];
    }
}
