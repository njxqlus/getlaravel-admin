<?php

namespace App\Http\Controllers\CP\RBAC;

use App\Http\Requests\RBAC\Role\RoleCreateRequest;
use App\Http\Requests\RBAC\Role\RoleUpdateRequest;
use App\Models\RBAC\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('cp.rbac.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cp.rbac.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateRequest $request)
    {
        $role = Role::create($request->all());

        return redirect()->action('CP\RBAC\RoleController@show', $role)->with('success', __('messages.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RBAC\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('cp.rbac.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RBAC\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('cp.rbac.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param RoleUpdateRequest $request
     * @param  \App\Models\RBAC\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->input('permissions'));

        return redirect()->action('CP\RBAC\RoleController@show', $role)->with('success', __('messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RBAC\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->action('CP\RBAC\RoleController@index')->with('success', __('messages.delete'));
    }
}
