<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property bool $can_access_internal_panel
 * @property bool $can_access_user_management
 * @property bool $can_modify_user
 * @property bool $can_access_role_management
 * @property bool $can_modify_role
 * @property bool $can_assign_role
 * @mixin IdeHelperRole
 */
class Role extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
