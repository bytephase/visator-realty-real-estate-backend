<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name'           => ['required'],
            'email'          => ['nullable', 'email', 'max:254'],
            'mobile_number'  => ['required'],
            'phone_number'   => ['nullable'],
            'assigned_to'    => ['nullable', 'integer'],
            'created_by'     => ['required', 'integer'],
            'source'         => ['nullable'],
            'status'         => ['required'],
            'next_follow_up' => ['nullable', 'date'],
            'comment'        => ['nullable'],
            'budget_id'      => ['nullable', 'integer'],
            'priority'       => ['required'],
        ];
    }
}
