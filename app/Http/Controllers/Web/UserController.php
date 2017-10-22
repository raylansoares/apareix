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
        $roles       = Role::all();
        $permissions = Permission::all();
        $users       = User::with('roles')
            ->orderBy('created_at', 'desc')
            ->simplePaginate(5);

        return view('users.index',
            compact('users', 'roles', 'permissions'));
    }

    public function store(Request $request, ImageRepository $repo)
    {
        $user = User::create($request->except('primaryImage', 'role_id'));
        $user->roles()->attach($request->role_id);

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

    public function status($id)
    {
        $ids = explode(',', $id);
        $names = null;

        foreach ($ids as $id) {
            $user = User::find($id);
            $name = $user->name;
            if ($user->status == 0) {
                $user->status = 1;
                $user->save();
            } elseif ($user->status == 1) {
                $user->status = 0;
                $user->save();
            }
            $names .= $name . '; ';
        }

        return back()
            ->with([
                'message' => 'User [' . $names . '] successfully updated!',
                'type' => 'success',
                'icon' => 'check']);
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->role_id);

        $name = $user->name;

        return back()
            ->with([
                'message' => 'Admin ['.$name.'] successfully updated!',
                'type' => 'success',
                'icon' => 'check']);
    }
}
