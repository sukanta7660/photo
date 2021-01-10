<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $primaryKey = 'galleryID';
    protected $fillable = ['images', 'photographerID', 'userID'];

    public function photographer(){
        return $this->belongsTo('App\Photographer','photographerID');
    }
}
