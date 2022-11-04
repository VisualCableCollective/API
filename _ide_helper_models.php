<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Handoff tokens are used for securely redirecting a staff member to a protected service tool (like the VTCManager Horizon Dashboard or
 * the VTCManager Telescope Dashboard).
 *
 * @property string $id UUID
 * @property Service $service Represents the service product.
 * @property Tool $tool Represents the tool used by the service product.
 * @property Carbon $updated_at
 * @property Carbon $created_at Represents the time, when the token was created. If it's older than 10 seconds, it's invalid.
 * @property boolean $is_used If the token is used, it's invalid.
 * @property string $user_mac_address Token can only be valid for this mac address
 * @property int $user_id
 * @property string $user_ip
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereIsUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereTool($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HandoffToken whereUserIp($value)
 */
	class IdeHelperHandoffToken {}
}

namespace App\Models\Passport{
/**
 * App\Models\Passport\Client
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string|null $secret
 * @property string|null $provider
 * @property string $redirect
 * @property bool $personal_access_client
 * @property bool $password_client
 * @property bool $revoked
 * @property int $firstParty
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\AuthCode[] $authCodes
 * @property-read int|null $auth_codes_count
 * @property-read string|null $plain_secret
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \App\Models\User|null $user
 * @method static \Laravel\Passport\Database\Factories\ClientFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereFirstParty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUserId($value)
 */
	class IdeHelperClient {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property string $name
 * @property bool $can_access_internal_panel
 * @property bool $can_access_user_management
 * @property bool $can_modify_user
 * @property bool $can_access_role_management
 * @property bool $can_modify_role
 * @property bool $can_assign_role
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanAccessInternalPanel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanAccessRoleManagement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanAccessUserManagement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanAssignRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanModifyRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCanModifyUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class IdeHelperRole {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HandoffToken[] $handoff_tokens
 * @property-read int|null $handoff_tokens_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class IdeHelperUser {}
}

