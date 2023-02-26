<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use App\Modules\Services\SignService;

class SignController extends Controller
{

    public function signIn(SignInRequest $request, SignService $service)
    {
        return $service->signIn($request->validated());
    }
}
