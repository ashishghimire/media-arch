<?php
    namespace App\Repositories\Backend\File;

    use App\Models\File\File;
    use App\Providers\Constants\CommonConstants;
    use Illuminate\Support\Facades\Auth;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:28 PM
     */
    class EloquentFileRepository implements FileRepositoryInterface
    {

        /**
         * @var File
         */
        private $model;



        /**
         * EloquentFileRepository constructor.
         */
        public function __construct(File $File)
        {

            $this->model = $File;
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


        public function getFileByAlbum($album_id)
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



        public function sumOfFileSize($album_id)
        {
            // TODO: Implement sumOfFileSize() method.
            return $this->model->where('album_id','=',$album_id)->sum('size');
        }
    }