<?php

namespace App\Modules\Services;

use App\Http\Resources\SignInResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class SignService
{
    public function signIn(array $attempt)
    {
        $user = User::where('email', $attempt["email"])->first();
        if (! $user || ! Hash::check($attempt["password"], $user->password)) {
            throw ValidationException::withMessages([
                'email' => [__('The provided credentials are incorrect')],
            ]);
        }
        return new SignInResource($user);
    }
}
