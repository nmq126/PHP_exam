<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentRequest extends FormRequest
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
            'apartmentName' => 'required|min:10|max:50',
            'address' => 'required',
            'status' => 'required',
            'price' => 'numeric',
            'thumbnail' => 'url',
        ];
    }
    public function messages()
    {
        return [
            'apartmentName.required' => 'Vui lòng nhập tên chung cư',
            'apartmentName.min' => 'Tên chung cư dài hơn 10 kí tự',
            'apartmentName.max' => 'Tên chung cư không nhiều  hơn 50 kí tự',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'status.required' => 'Vui lòng chọn trạng thái',
            'price.numeric' => 'Giá phải là một số',
            'thumbnail.url' => 'Định dạng link thumbnail không đúng'

        ];
    }
}
