<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
class AuthController extends Controller
{
    public function __construct(private readonly AuthService $authService)
    {
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $Account = $this->authService->getCredintioal($data);
        dd($Account);
    }
}
