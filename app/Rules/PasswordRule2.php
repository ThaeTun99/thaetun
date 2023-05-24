<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Log;

class PasswordRule2 implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        If(!is_numeric($value)){

            Log::channel("customlog")
        ->error("Login password fails rule-2.");

        Log::channel("signlog")
        ->error("Signup password fails rule-2.");

            $fail("The :attribute must be only numbers.");
        }else{

            Log::channel("customlog")
        ->info("Login password success rule-2");

        Log::channel("customlog")
        ->info("Signup password success rule-2");
        }
    }
    // public function __construct(){

    // }

    // public function passes($attribute,$value){

    //     return is_numeric($value);
    // }

    // public function message(){
    //     return "The validation error message.";
    // }

}
