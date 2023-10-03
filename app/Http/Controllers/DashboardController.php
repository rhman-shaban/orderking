<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $merchants = Merchant::latest('id')->paginate(9);

        return inertia('Welcome', compact('merchants'));

    }
}
