<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSubscribe extends Model
{
    use HasFactory;
    protected $fillable = ['site_id','subscribers_id'];
    
    
    public function site()
    {
        return $this->belongsTo(Site::class);
    }
    public function subscriber()
    {
        return $this->belongsTo(Subscriber::class);
    }
}
