<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BudgetRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'min' => ['required', 'integer'],
            'max' => ['required', 'integer'],
        ];
    }
}
