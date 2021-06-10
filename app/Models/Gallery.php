<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'galleries';

    protected $fillable = [
        'event_id','catalog_id','news_id','image'
    ];

    protected $hidden = [

    ];

    public function event(){
        return $this->belongsTo(Event::class,'event_id','id');
    }
}
