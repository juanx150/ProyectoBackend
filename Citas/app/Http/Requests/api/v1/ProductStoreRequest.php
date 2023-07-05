<?php

namespace App\Http\Requests\api\v1;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            "title" => "required|name|alpha_dash|min:3",
            "message" => "required|name|alpha_dash|min:3",
            "realPublicacionYea" => "nullable|date|after:today",
            "autor" => "required|name|alpha_dash|min:3",
            "user_id" => "required|exists:users,id"
        ];
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json($validator->errors(),
    422));
    }

}
