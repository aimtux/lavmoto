<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MotorUpdateRequest extends Request
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
            'kode' => 'required|alpha_num|max:20',
            'tahun' => 'required|numeric',
            'merk' => 'required',
            'jenis' => 'required', 
            'ukuran_cc' => 'required|numeric',
            'warna' => 'required|alpha_num',
            'harga' => 'required|integer',
        ];
    }
}
