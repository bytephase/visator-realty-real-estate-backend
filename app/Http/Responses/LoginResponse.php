<?php

namespace App\Http\Responses;

use Illuminate\Http\Request;
use App\Http\Resources\LoginResource;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     * @param  Request  $request
     * @return LoginResource
     */
    public function toResponse($request): LoginResource
    {
        $request->user()->last_login = now();
        $request->user()->ip = $request->ip();
        $request->user()->save();
        return new LoginResource($request->user());
    }
}
