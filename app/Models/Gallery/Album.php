<?php

    namespace App\Models\Gallery;

    use Illuminate\Database\Eloquent\Model;

    class Album extends Model
    {

        //
        protected $guarded = [];


        public function photo()
        {

            return $this->hasMany('App\Models\Gallery\Photo');
        }


        public function parent()
        {

            return $this->belongsTo('App\Models\Gallery\Album' , 'album_id');
        }


        public function children()
        {

            return $this->hasMany('App\Models\Gallery\ALbum' , 'album_id');
        }


        public function file()
        {

            return $this->hasMany('App\Models\File\File');
        }
    }
