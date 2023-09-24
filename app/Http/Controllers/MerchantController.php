<?php

namespace App\Http\Controllers;

use App\Http\Resources\MerchantResources;
use App\Models\Merchant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
  public function index()
  {
     if(Auth::guard('admin')->check())
      {
          $merchants = Merchant::latest('id')->paginate(8);
      }
      return inertia('Merchants/Index', compact('merchants'));
  }


}

?>
