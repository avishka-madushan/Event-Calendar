<?php
namespace App\Models;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [

        'event_title',
        'description',
        'date',
        'userid'
    ];
}

