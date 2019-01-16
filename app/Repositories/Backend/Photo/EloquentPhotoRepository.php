<?php
    namespace App\Repositories\Backend\Photo;

    use App\Models\Gallery\Photo;
    use App\Providers\Constants\CommonConstants;
    use Illuminate\Support\Facades\File;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:28 PM
     */
    class EloquentPhotoRepository implements PhotoRepositoryInterface
    {

        /**
         * @var Photo
         */
        private $model;



        /**
         * EloquentPhotoRepository constructor.
         */
        public function __construct(Photo $Photo)
        {

            $this->model = $Photo;
        }


        public function all()
        {

            // TODO: Implement all() method.
            return $this->model->paginate(CommonConstants::PAGINATION_COUNT);
        }



        public function store(array $data)
        {

            // TODO: Implement store() method.

            return $this->model->create($data);
        }


        public function update($id , array $data)
        {

            // TODO: Implement update() method.
            return $this->model->find($id)->update($data);
        }


        public function findByID($id)
        {

            // TODO: Implement find() method.
            return $this->model->find($id);
        }


        public function getPhotoByAlbum($album_id)
        {

            // TODO: Implement getPhotoByAlbum() method.
            return $this->model->where('album_id' , '=' , $album_id)->paginate(CommonConstants::PAGINATION_COUNT_Gallery);
        }


        public function getPhotoByAlbumALL($album_id)
        {

            // TODO: Implement getPhotoByAlbum() method.
            return $this->model->where('album_id' , '=' , $album_id)->get();
        }


        public function listBYPhotoAlbum()
        {

            // TODO: Implement listBYPhotoAlbum() method.
            return $this->model->pluck('title' , 'id');
        }


        public function delete($id)
        {

            // TODO: Implement delete() method.

            $photo = $this->model->find($id);

            $image_path = app_path("uploads/photo/250-200/crop/{$photo->image}");

            if (File::exists($image_path)) {
                //File::delete($image_path);
                unlink($image_path);
            }

            return $photo->delete();
        }


        public function sumOfPhotoSize($album_id)
        {

            // TODO: Implement sumOfPhotoSize() method.
            return $this->model->where('album_id' , '=' , $album_id)->sum('size');
        }
    }
