<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','site_id'];
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
