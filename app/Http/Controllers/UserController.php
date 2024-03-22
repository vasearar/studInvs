<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers() {
        return view('attribute', [
            'title' => 'Utilizatori',
            'attributes' => User::latest()->paginate(6)->withQueryString(),
            'type' => 'user'
        ]);
    }
}
