<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    public function administrator() {
        return $this->name('edit-user');
    }
}
