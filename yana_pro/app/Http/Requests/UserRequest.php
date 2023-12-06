<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:30',
            'email' => 'required|email|email_check',
            'password' => 'required'
        ];
    }
    public function messages(){
        return [
            'name.required' => '名前は必ず入力してください。',
            'name.max' => '名前は30文字以内で入力してください。',
            'email.required' => 'メールアドレスは必ず入力してください。',
            'email.email' => 'メールアドレスの形式で入力してください。',
            'email.email_check' => 'そのメールアドレスは既に使用されています。',
            'password.required' => 'パスワードは必ず入力してください。',
        ];
    }
}
