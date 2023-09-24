<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
       if(Auth::guard('merchant')->check())
        {
            $users = User::latest('id')->where("merchant_id",auth()->user()->id)->paginate(1);
        }
        elseif(Auth::guard('admin')->check())
        {
            $users = User::paginate(10); 
        }
        return Inertia::render('Users/Index', ['users' => $users]);
    }


}
