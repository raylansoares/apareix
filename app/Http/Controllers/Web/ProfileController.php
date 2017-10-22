<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store(Request $request)
    {
        $role = Role::create($request->all());
        $role->permissions()->attach($request->permission_id);

        $name = $role->name;

        return back()->with([
            'message' => 'Profile ['.$name.'] successfully created!',
            'type' => 'success',
            'icon' => 'check']);
    }
}
