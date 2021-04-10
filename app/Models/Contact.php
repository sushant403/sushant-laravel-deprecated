<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Notification;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\ContactRequestNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'contacts';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static function booting()
    {
        self::created(function (Contact $contact) {
            $user = User::all();
            Notification::route('mail', $user)->notify(new ContactRequestNotification($contact));
        });
    }
}
