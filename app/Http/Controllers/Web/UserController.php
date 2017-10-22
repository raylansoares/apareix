<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users       = User::with('roles')
            ->orderBy('created_at', 'asc')
            ->simplePaginate(10);
        $roles       = Role::all();
        $permissions = Permission::all();

        return view('users.index',
            compact('users', 'roles', 'permissions'));
    }

    public function store(Request $request, ImageRepository $repo)
    {
        $user = User::create($request->except('primaryImage'));

        if ($request->hasFile('primaryImage')) {
            $user->avatar = $repo->saveImage($request->primaryImage, $user->id, 'users', null, 250);
        }

        $name = $user->name;
        $user->save();

        return back()
            ->with([
                'message' => 'User ['.$name.'] successfully created!',
                'type' => 'success',
                'icon' => 'check']);
    }
}
