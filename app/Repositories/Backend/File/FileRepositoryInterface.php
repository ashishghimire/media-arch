<?php
    namespace App\Repositories\Backend\File;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:29 PM
     */
    interface FileRepositoryInterface
    {

        public function all();


        public function store(array $data);


        public function findByID($id);


        public function update($id , array $data);


        public function getFileByAlbum($album_id);


        public function getPhotoByAlbumALL($album_id);


        public function listBYPhotoAlbum();


        public function delete($id);


        public function sumOfFileSize($album_id);

    }