<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'repuired',
            'email' => 'reuired | email',
            'password' => 'requred'
        ];
    }

    public function messages(){
        return [
            'name.requred'=> '名前を入力してください',
            'email.reuired'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスは「ユーザー名＠ドメイン」形式で入力してください',
            'password.reuired'=>'パスワードを入力してください',

        ];
    }
}
