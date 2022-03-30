<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

   protected $fillable = [
        'title',
        'description',
        'url',
    ];
   //protected $guarded = [];
    public function profileImage()
    {
    }
        return $this->belongsTo(User::class);
    }
}
