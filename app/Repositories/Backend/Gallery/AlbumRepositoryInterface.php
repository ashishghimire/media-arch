<?php
    namespace App\Repositories\Backend\Gallery;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:29 PM
     *
     *
     */
    interface AlbumRepositoryInterface
    {

        public function all($type);


        public function store(array $data);


        public function findByID($id);


        public function getAlbumByAlbumID($album_id);


        public function findParentAlbumByALbumID($album_id);


        public function getLastID($id);


        public function mergeParent($parentid);


        public function getParent($parentid);


        public function update($id , array $data);


        public function listBYPhotoAlbum();


        public function count($type);

    }