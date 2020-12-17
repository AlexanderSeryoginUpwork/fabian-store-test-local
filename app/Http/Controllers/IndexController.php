<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class IndexController extends Controller
{

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {

//        Permission::create(['name' => 'can all']);
//        $role = Role::create(['name' => 'admin']);
//        $permission = Permission::create(['name' => 'can all']);
        $user = Auth::user();
        $role = $user->permissions;

        return view('welcome');
    }

    public function dashboard()
    {
        $user = auth()->user();

        return view('dashboard');
    }
}
