<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Gate;
use App\Models\User;

class UsersController extends Controller {

    public function index(Request $request, User $user) {

        if ($request->user()->cannot('viewAny', $user)) {
            abort(403);
        }

        return User::all();
    }


}
