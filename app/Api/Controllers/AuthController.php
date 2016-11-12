<?php
/**
 * Created by PhpStorm.
 * User: jql
 * Date: 3/25/16
 * Time: 6:36 PM
 */

namespace App\Api\Controllers;

use App\Api\Requests\Auth\RegisterRequest;
use App\Api\Transformers\UserTransformer;
use App\Models\User;
use Illuminate\Http\Request;
use JWTAuth;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends ApiController
{
    protected $username = 'username';

    public function __construct()
    {
        $this->middleware('jwt.auth', ['except' => ['register', 'login']]);
    }

    public function register(Request $request)
    {
        $newUser = [
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
        ];

        $user = User::create($newUser);
        $token = JWTAuth::fromUser($user);

        return $this->success(['token' => $token]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return $this->success(['token' => $token]);
    }

    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
            return response()->json(['token_absent'], $e->getStatusCode());
        }

        // the token is valid and we have found the user via the sub claim
//        return response()->json(compact('user'));
        return $this->response->item($user, new UserTransformer());
    }
}