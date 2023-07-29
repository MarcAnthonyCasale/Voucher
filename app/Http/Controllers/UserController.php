<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use HasApiTokens, HasFactory, Notifiable;
   
    public function index() 
    {
        $users = User::latest()->paginate(10);

        return view('home', compact('users'));
    }

    public function edit(User $user) 
    {
        return [
            'userRole' => $user->roles->pluck('name')->toArray(),
            'role' => Role::latest()->get()
        ];
    }

    

}
