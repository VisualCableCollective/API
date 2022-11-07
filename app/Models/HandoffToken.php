<?php

namespace App\Models;

use App\Enums\Service;
use App\Enums\Tool;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Handoff tokens are used for securely redirecting a staff member to a protected service tool (like the VTCManager Horizon Dashboard or
 * the VTCManager Telescope Dashboard).
 *
 * @property string $id UUID
 * @property Service $service Represents the service product.
 * @property Tool $tool Represents the tool used by the service product.
 * @property Carbon $updated_at
 * @property Carbon $created_at Represents the time, when the token was created. If it's older than 5 seconds, it's invalid.
 * @property boolean $is_used If the token is used, it's invalid.
 * @property string $user_mac_address Token can only be valid for this mac address
 * @mixin IdeHelperHandoffToken
 */
class HandoffToken extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'service' => Service::class,
        'tool' => Tool::class,
    ];

    /**
     * The user, who created the token.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
