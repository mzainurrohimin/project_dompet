<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarnaDompetRequest extends FormRequest
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
            'warna1' => 'required|max:255',
            'gambar1' => 'required|image',
            'warna2' => 'required|max:255',
            'gambar2' => 'required|image'
        ];
    }

    public function getGambarAttribute($value)
    {
        return url('storage/' . $value);
    }
}
