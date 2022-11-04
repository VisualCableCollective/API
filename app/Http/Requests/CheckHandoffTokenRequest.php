<?php

namespace App\Http\Requests;

use App\Enums\Service;
use App\Enums\Tool;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CheckHandoffTokenRequest extends FormRequest
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
            'token' => 'required|uuid',
            'user_ip' => 'required|ip',
            'service' => ['required', new Enum(Service::class)],
            'tool' => ['required', new Enum(Tool::class)],
        ];
    }
}
