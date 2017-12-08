<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class catalogue_request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //chinht từ false thahf true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() //đưa điều kiện vào đây
    {
        return [
            'TieuDe' => 'required|unique:tintuc,Ten'  //ten field trong phpmyadmin
        ];
    }
}
