<?php

namespace Confee\Units\Authentication\Http\Controllers;

use Confee\Support\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Lang;
use Tymon\JWTAuth\Exceptions\JWTException;


class LoginController extends Controller
{
    use ThrottlesLogins;

	public function login(Request $request)
	{

        // se varias houver varias tentativas de login
        if ($this->hasTooManyLoginAttempts($request))
        {
            // dispara um evento
            $this->fireLockoutEvent($request);

            // envia resposta ao usuario
            return $this->sendLockoutResponse($request);
        }


		// grab credentials from the request
        $credentials = $request->only('email', 'password');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = app('tymon.jwt.auth')->attempt($credentials)) {

                // Increments login attemps
                // vai armazernar no cache a tentativa invalida de login, caso caia aqui
                $this->incrementLoginAttempts($request);

                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {

            // Increments login attemps
            // vai armazernar no cache a tentativa invalida de login, caso caia aqui
            $this->incrementLoginAttempts($request);
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // all good so return the token
        return response()->json(compact('token'));
	}

    public function username()
    {
        // informa que a chave de identificação é o email
        return 'email';
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        $message = Lang::get('auth.throttle', ['seconds' => $seconds]);

        // 429 Too Many Requests, bloqueado por varias tentativas de acesso erradas
        return response()->json(['error' => $message], Response::HTTP_TOO_MANY_REQUESTS);
    }
}