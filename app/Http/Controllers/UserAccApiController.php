<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAcc;

class UserAccApiController extends Controller
{
    public function getUser()
    {
        $user_acc = UserAcc::all();
        return response()->json($user_acc);
    }
}
