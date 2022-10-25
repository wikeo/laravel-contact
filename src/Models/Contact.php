<?php

namespace Wikeo\LaravelContact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sender_name',
        'sender_email',
        'subject',
        'message',
    ];

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected static function newFactory()
    {
        return \Wikeo\LaravelContact\Database\Factories\ContactFactory::new();
    }
}
