<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name_kk' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'description_kk' => 'required|string|max:255',
            'description_ru' => 'required|string|max:255',
            'poster' => 'required|uuid|exists:uploads,uuid',
            'image' => 'required|uuid|exists:uploads,uuid',
        ];
    }
}
