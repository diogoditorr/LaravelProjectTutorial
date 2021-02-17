<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
        return ($this->image) ? '/storage/' . $this-> image : '/storage/default/image_profile.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
