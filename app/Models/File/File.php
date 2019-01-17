<?php

    namespace App\Models\File;

    use Illuminate\Database\Eloquent\Model;

    class File extends Model
    {

        //
        protected $guarded = [];


        public function album()
        {

            return $this->belongsTo('App\Models\Gallery\Album');
        }
    }
