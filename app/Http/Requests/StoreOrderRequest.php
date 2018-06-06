<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
            'minimum_rating' => 'numeric|between:0.0,5.0',
            'order_type_id' => 'required|exists:order_types,id',
            'priority_status_id' => 'required|exists:priority_statuses,id',
        ];
    }
}
