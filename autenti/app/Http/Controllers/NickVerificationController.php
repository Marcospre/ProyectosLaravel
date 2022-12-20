<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NickVerificationController extends Controller
{
    public function show(Request $request)
    {
        return $request->user()->hasVerifiedNick()
                        ? redirect()->route('home')
                        : view('verifynick');
    }

    public function verify(Request $request)
    {
        if ($request->user()->verification_code !== $request->code) {
            throw ValidationException::withMessages([
                'code' => ['The code your provided is wrong. Please try again or request another call.'],
            ]);
        }

        if ($request->user()->hasVerifiedNick()) {
            return redirect()->route('home');
        }

        $request->user()->markNickAsVerified();

        return redirect()->route('home')->with('status', 'Your nick was successfully verified!');
    }
}
