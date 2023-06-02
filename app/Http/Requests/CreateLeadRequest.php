<?php

namespace App\Http\Requests;

use App\Models\UserType;
use Illuminate\Foundation\Http\FormRequest;

class CreateLeadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->type_id === UserType::USER_TYPE_EMPLOYEE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'mobile_number' => [
                'nullable', 'required_if:email,nullable', 'min:10', 'unique:leads,mobile_number',
            ], 'email' => [
                'nullable', 'required_if:mobile_number,nullable', 'unique:leads,email',
            ], 'name' => [
                'required', 'string', 'max:60',
            ], 'phone_number' => [
                'nullable', 'max:10',
            ], 'lead_source' => [
                'nullable',
            ], 'next_follow_up' => [
                'nullable', 'date',
            ], 'assigned_user_id' => [
                'required', 'exists:users,id',
            ], 'role_id' => [
                'required',
            ], 'comment' => [
                'max:2000',
            ], 'budget' => [
                'nullable','decimal'
            ], 'address' => [
                'array',
            ], 'address.city' => [
                'nullable', 'max:100',
            ], 'address.address_line' => [
                'nullable', 'max:200',
            ], 'address.state' => [
                'nullable', 'max:100',
            ], 'address.zip_code' => [
                'nullable', 'max:20',
            ],
        ];
    }
}
