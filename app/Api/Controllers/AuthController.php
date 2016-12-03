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
        //return $this->response->item($this->user(), new UserTransformer());
        return $this->success($this->user);
    }
}