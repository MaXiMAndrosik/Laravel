<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use \Illuminate\Support\Facades\Gate;


class UsersController extends Controller {

    public function index(Request $request, User $user) {

        if ($request->user()->cannot('viewAny', $user)) {
            abort(403);
        }

        // Gate::authorize('view-users');

        return User::all();
    }

    public function show(Request $request, User $user) {

        if ($request->user()->cannot('view', $user)) {
            abort(403);
        }

        return $user;
        // return $user->isAdmin();
    }

}
