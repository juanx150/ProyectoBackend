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
    public function authorize(): bool
    {
        return true;
    }

    public function failedValidation(Validator $validator)
    {
    throw new HttpResponseException(response()->json($validator->errors(),
    422));
    }
    
    public function rules()
    {
    return [
    "name" => "required|unique:products,name|alpha_dash|min:3",
    "price" => "required|numeric|min:10|max:1000000",
    "expiration" => "nullable|date|after:today",
    "user_id" => "required|exists:users,id"
    ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
   
}
