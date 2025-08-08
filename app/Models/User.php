<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Mail\ResetPasswordLink as ResetPasswordLinkMailable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'country_code',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Country relation (normalized via countries table).
     */
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_code', 'iso2');
    }

    /**
     * Send the password reset notification with a custom email template.
     */
    public function sendPasswordResetNotification($token): void
    {
        $resetUrl = URL::to('/admin/reset-password') . '?token=' . urlencode($token) . '&email=' . urlencode($this->email);
        Mail::to($this->email)->send(new ResetPasswordLinkMailable($resetUrl));
    }
}
