<?php

namespace Api\Base\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IranMobileNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^(\+98|0098|98|0)9\d{9}$/', (string)$value)) {
            $fail('شماره موبایل وارد شده صحیح نمی باشد');
        }
    }
}
