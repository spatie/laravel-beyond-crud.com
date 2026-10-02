<?php

namespace App\Http\Front\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeToEmailListRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
        ];
    }
}
