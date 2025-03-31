<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = ['category', 'title', 'description', 'repository_url', 'image1', 'image2', 'image3'];

    public function images(){
        return $this->hasMany(ProjectImage::class);
    }
}
