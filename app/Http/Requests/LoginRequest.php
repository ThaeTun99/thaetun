<?php

namespace App\Http\Requests;

use App\Rules\PasswordRule;
use App\Rules\PasswordRule2;
use App\Rules\UsernameRule;
use App\Rules\UsernameRule2;
use App\Rules\UsernameRule3;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        Log::channel("customlog")
        ->info("return login request.");
        return [ 
            "username" => ['required',new UsernameRule(),new UsernameRule2(),new UsernameRule3()],
            "password" => ['required','between:8,12',new PasswordRule(),new PasswordRule2()],
        ];
    }
}
