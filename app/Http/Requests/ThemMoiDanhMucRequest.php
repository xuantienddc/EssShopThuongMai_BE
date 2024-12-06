<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemMoiDanhMucRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'ten_danh_muc'      => 'required',
            'slug_danh_muc'     => 'required',
            'tinh_trang'        => 'required',
            'id_danh_muc_cha'   => 'required',
            'hinh_anh'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ten_danh_muc.*'      => 'Tên danh mục không được để trống',
            'slug_danh_muc.*'     => 'Slug danh mục không được để trống',
            'tinh_trang.*'        => 'Tình trạng không được để trống',
            'id_danh_muc_cha.*'   => 'Danh mục không được để trống',
            'hinh_anh.*'          => 'Hình ảnh không được để trống',
        ];
    }
}
