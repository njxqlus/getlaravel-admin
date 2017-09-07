<?php

namespace App\Models\RBAC;

use Laratrust\LaratrustPermission;

class Permission extends LaratrustPermission {

    protected $fillable = [
        'name', 'display_name', 'description',
    ];
}
