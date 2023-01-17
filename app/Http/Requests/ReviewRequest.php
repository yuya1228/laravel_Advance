<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'shop_name' => 'required|string',
            'comment' => 'required|string',
            'stars' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'shop_name' => '店舗名を記入してください。',
            'comment' => 'レビューを入力してください。',
            'stars' => '評価してください。'
        ];
    }
}
