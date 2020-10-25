<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserInfectionMarkController extends Controller
{
    public function update(User $user)
    {
        $user->is_infected = true;
        $user->save();
        $fullName = $user->getFullName();

        return redirect()->back()->with('status', "User $fullName was marked as infected!!!");
    }
}
