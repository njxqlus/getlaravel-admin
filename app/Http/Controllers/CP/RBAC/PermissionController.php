<?php

namespace App\Http\Controllers\CP\RBAC;

use App\Http\Requests\RBAC\Permission\PermissionCreateRequest;
use App\Http\Requests\RBAC\Permission\PermissionUpdateRequest;
use App\Models\RBAC\Permission;
use App\Http\Controllers\Controller;

class PermissionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();

        return view('cp.rbac.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cp.rbac.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PermissionCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionCreateRequest $request)
    {
        $permission = Permission::create($request->all());
        $permission->roles()->sync($request->input('roles'));

        return redirect()->action('CP\RBAC\PermissionController@show', $permission)->with('success', __('messages.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RBAC\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view('cp.rbac.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RBAC\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('cp.rbac.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PermissionUpdateRequest $request
     * @param  \App\Models\RBAC\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionUpdateRequest $request, Permission $permission)
    {
        $permission->update($request->all());
        $permission->roles()->sync($request->input('roles'));

        return redirect()->action('CP\RBAC\PermissionController@show', $permission)->with('success', __('messages.update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RBAC\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->action('CP\RBAC\PermissionController@index')->with('success', __('messages.delete'));
    }
}
