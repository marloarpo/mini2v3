<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClimbersRequest extends FormRequest
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
            "phone_number" => "required",					
            "first_name" => "required",					
            "last_name" => "required",					
            "age" => "required|integer|min:18|max:65",					
            "gender" => "required",					
            "address" => "required",					
            'email' => 'required|email|unique:climbers',
            "status"=> "nullable",					
            "citizenship" => "required",
        ];
    }
}
