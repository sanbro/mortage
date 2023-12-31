<?php

namespace App\Http\Requests\loan;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreLoanRequest extends FormRequest
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
        return [
            'loan_amount'           => 'required|numeric|min:0',
            'annual_interest_rate'  => 'required|numeric|min:0',
            'loan_term'             => 'required|integer|min:0',
            'monthly_extra_payment' => 'nullable|numeric|min:0',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(
            [
                'status'  => false,
                'messages' => __('Invalid Data'),
            ]
        , 422));
    }
}
