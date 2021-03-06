<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HargaRequest extends FormRequest
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
            'harga_normal' => 'required|max:255',
            'harga_diskon' => 'required|max:255',
            'diskon' => 'required|required|max:255',
            'potongan_ongkir' => 'required|max:255',
            'pesan_sekarang' => 'required',
            'pesan_tf' => 'required',
            'pesan_cod' => 'required'

        ];
    }

    public function getGambarAttribute($value)
    {
        return url('storage/' . $value);
    }
}
