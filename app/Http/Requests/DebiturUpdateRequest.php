<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class DebiturUpdateRequest extends Request
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
            'ktp' => 'required|numeric',
            'nama' => 'required|string',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required|alpha',
            'penghasilan' => 'required|integer',
            'alamat' => 'required|string'
        ];
    }
}
