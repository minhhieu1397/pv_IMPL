<?php

namespace App\Http\Requests\User\Users;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'email' => 'required|max:255|email',
            'name' => 'required',
            'password' => 'min:8|required_with:cf_pwd|same:cf_pwd',
            'address' => 'required',
            'phone' => 'required'
        ];
    }
}
