<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends ApiRequest
{

    public function rules()
    {
        return [
            "subject" => ["required"],
            "message" => ["required"],
        ];
    }
}
