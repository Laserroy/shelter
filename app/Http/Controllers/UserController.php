<?php

namespace App\Http\Controllers;

use App\Http\Filters\UserFilters;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, UserFilters $filters)
    {
        $request->flash();
        $users = User::filter($filters)
            ->orderBy('last_login', 'desc')
            ->paginate(10);

        return view('user.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }
}
