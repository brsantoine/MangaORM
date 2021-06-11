<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsertMangaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre' => ['required', 'string', 'max:100'],
            'nomDessinateur' => ['required', 'string', 'max:100'],
            'nomScenariste' => ['required', 'string', 'max:100'],
            'genre' => ['required', 'string', 'max:50'],
            'prix' => ['required', 'numeric', 'min:0']
        ];
    }
}
