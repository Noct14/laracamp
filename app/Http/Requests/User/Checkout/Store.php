<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
<<<<<<< HEAD
        return Auth::check();
=======
        return Auth::check(); //untuk mengecek apakah sudah login atau belum, apabila belum maka tidak dapat masuk ke laman ini 
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }

    /**
     * Get the validation rules that apply to the request.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array<string, mixed>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    public function rules()
    {
        $expiredValidation = date('Y-m', time());
<<<<<<< HEAD

        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.Auth::id().',id',
=======
        return [
            'name' => 'required|string', /*kenapa string karena nanti data yang diterima menggunakan string*/
            'email' => 'required|email|unique:users,email,'.Auth::id().',id',/*ini jadi email yang digunakan untuk login tidak dikenal sebagai unique lagi tapi bisa digunakan*/
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
            'occupation' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
        ];
    }
}
