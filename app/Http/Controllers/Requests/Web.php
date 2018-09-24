<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'user_id' => 'required|alpha_num',
            'password' => 'required|alpha_num',
        ];
    }

    /**
     * Custom attributes validate.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'user_id' => 'Mã đăng nhập',
            'password' => 'Mật khẩu',
        ];
    }
}
