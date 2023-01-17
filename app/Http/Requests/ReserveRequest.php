<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReserveRequest extends FormRequest
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
            'sum_people'=> 'required|integer',
            'date_start'=> 'required|date_format:Y-m-d',
            'time_start'=> 'required|date_format:H:i',
        ];
    }

    public function messages()
    {
        return [
            'sum_people' => '人数を選んでください。',
            'date_start' => '予約する日付を選んでください。',
            'time_start' => '予約する時間を選んでください。',
        ];
    }
}
