<?php

    namespace App\Models\Gallery;

    use Illuminate\Database\Eloquent\Model;

    class Photo extends Model
    {

        //

        public $guarded = [];


        public function album()
        {

            return $this->belongsTo('App\Models\Gallery\Album');
        }
    }
