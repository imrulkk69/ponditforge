<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $dates = ['published_at'];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
        $imageUrl = "";

        if(!is_null($this->image))
        {
            $imagePath = public_path()."/img/".$this->image;

            if(file_exists($imagePath))
                $imageUrl = asset("/img/".$this->image);
        }

        return $imageUrl;
    }

    public function getDateAttribute()
    {
        return  is_null($this->published_at) ? '' : $this->created_at->diffForHumans();
    }

    public function scopeLatestFirst()
    {
        return $this->orderBy('created_at', 'desc');
    }

    public function scopePublished()
    {
        return $this->where("published_at", "<=", "NOW()");
    }
}
