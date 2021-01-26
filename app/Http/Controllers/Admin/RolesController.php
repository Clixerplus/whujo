<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Role::class, 'role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        Role::create(['name' => $request->name]);
        return back()->with(['success' => 'El role ha sido creado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.roles.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update(['name' => $request->name]);
        return back()->with(['success' => 'El role ha sido editado']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Spatie\Permission\Models\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (auth()->user()->hasRole($role->name))
            return back()->withErrors('Imposible borrar el rol al que pertenece');
        else
            $role->delete();

        return back()->with(['success' => 'El role ha sido editado']);
    }
}
