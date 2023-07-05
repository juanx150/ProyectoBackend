<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProductUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json($validator->errors(),
    422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => "alpha_dash|min:3",
            "message" => "alpha_dash|min:3",
            "realPublicacionYea" =>"nullable|date",
            "autor" => "alpha_dash|min:3",
            "expiration" => "nullable|date",
            "user_id" => "exists:users,id"
        ];
    }
}
