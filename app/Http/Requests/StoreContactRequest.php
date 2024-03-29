<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => [
                'required',
            ],
            'email'   => [
                'email',
            ],
            'message'   => [
                'required',
            ],
            // 'g-recaptcha-response' => 'recaptcha',
        ];
    }
}
