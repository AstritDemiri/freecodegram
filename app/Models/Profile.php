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
        'image',
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/16qnrAVMjsf6qWQ33HCr3FYxvC6xBI3G24ag2vHT.jpg';
        return '/storage/' . $imagePath;
    }

    //protected $guarded = [];
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
