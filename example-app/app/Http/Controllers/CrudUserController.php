<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CrudUserController extends Controller
{
    /**
     * View user detail page
     */
    public function readUser(Request $request) {
        $user_id = $request->get('id');
        $user = User::find($user_id);

        return view('crud_user.read', ['user' => $user]);
    }
}
