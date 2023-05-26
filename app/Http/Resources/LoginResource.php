<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\User */
class LoginResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"                => $this->id,
            "name"              => $this->name,
            "email"             => $this->email,
            "mobile_number"     => $this->mobile_number,
            "phone_number"      => $this->phone_number,
            "gender"            => $this->gender,
            "date_of_birth"     => $this->date_of_birth,
            "last_login"        => $this->last_login,
            "ip"                => $this->ip,
            "is_active"         => $this->is_active,
            "email_verified_at" => $this->email_verified_at,
        ];
    }
}
