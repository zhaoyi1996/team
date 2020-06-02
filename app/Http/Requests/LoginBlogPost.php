<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginBlogPost extends FormRequest
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
            'a_name' => 'required|regex:/^[\x{4e00}-\x{9fa5}]{2,18}$/u|unique:admin',
            'a_pwd'=>'required|regex:/^\w{6,16}$/',
        ];
    }
    public function messages(){ 
        return [ 
            'a_name.required' => '管理员名称不能为空', 
            'a_name.regex' => '管理员名称必须为中文，且在2~18位之间', 
            'a_name.unique' => '管理员名称已存在', 
            'a_pwd.required' => '密码不能为空', 
            'a_pwd.regex' => '密码由数字、字母、下划线组成，6~16位之间', 
        ]; 
    }
}
