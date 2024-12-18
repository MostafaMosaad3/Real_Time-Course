<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Broadcasting\Channel;
use Illuminate\Database\Eloquent\BroadcastsEvents;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
//    use BroadcastsEvents ;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * fields ordering in filteration
     */
    const ORDER = ['name', 'email'];

    ##--------------------------------- RELATIONSHIPS


    ##--------------------------------- ATTRIBUTES


    ##--------------------------------- CUSTOM FUNCTIONS
    public function nameOnHeader()
    {
        if (strlen($this->name) > 10) {
            return \substr($this->name, 0, 10) . '..';
        }
        return $this->name;
    }


    ##--------------------------------- SCOPES


    ##--------------------------------- ACCESSORS & MUTATORS
    /**
     * Interact with the user's password
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function password(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                if ($value != null) {
                    return bcrypt($value);
                }
            },
        );
    }

//    public function broadcastOn(string $event): array
//    {
//        return [
//            new channel('new_user_channel_from_model_broadcasting'),
//        ];
//    }
//
//    public function broadcastAs(string $event): string|null
//    {
//        return match ($event) {
//            'created' => 'CustomUserCreated',
//            default => null,
//        };
//    }
//
//    public function broadcastWith(string $event): array
//    {
//        return match ($event) {
//            'created' => ['email' => $this->email],
//            default => ['model' => $this],
//        };
//    }
}
