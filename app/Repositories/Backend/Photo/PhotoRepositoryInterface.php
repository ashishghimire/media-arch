<?php
    namespace App\Repositories\Backend\Photo;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:29 PM
     */
    interface PhotoRepositoryInterface
    {

        public function all();


        public function store(array $data);


        public function findByID($id);


        public function update($id , array $data);


        public function getPhotoByAlbum($album_id);


        public function getPhotoByAlbumALL($album_id);


        public function listBYPhotoAlbum();


        public function delete($id);


        public function sumOfPhotoSize($album_id);

    }