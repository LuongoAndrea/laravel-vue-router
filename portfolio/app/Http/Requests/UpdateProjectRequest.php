<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use illuminate\Validation\Rule;
use Illuminate\Validation\Rule;


class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', Rule::unique('projects')->ignore($this->project)],
            'content' => ['nullable'],
            'cover_image' => ['nullable', 'image', 'max:1000'],

        ];
    }
// public function message()
// {
//     return [
//         'title.required' => 'il tiotlo è obbligatorio',
//         'title.min' => 'il tiotlo deve essere lungo almeno min 3 caratteri',
//         'title.max' => 'il tiotlo deve essere lungo almeno max  caratteri',
//         'title.unique:projects' => 'il tiotlo è obbligatorio',

//     ];
// }
}