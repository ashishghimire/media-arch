<?php
    namespace App\Repositories\Backend\Gallery;

    use App\Models\Gallery\Album;
    use App\Providers\Constants\CommonConstants;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;

    /**
     * Created by PhpStorm.
     * User: sabin
     * Date: 5/15/17
     * Time: 12:28 PM
     */
    class EloquentAlbumRepository implements AlbumRepositoryInterface
    {

        /**
         * @var Album
         */
        private $model;



        /**
         * EloquentAlbumRepository constructor.
         */
        public function __construct(Album $album)
        {

            $this->model = $album;
        }


        public function all($type)
        {

            // TODO: Implement all() method.

            return $this->model->where('user_id' , '=' , Auth::User()->id)->where('type' , '=' , $type)->where('album_id' , '=' , 0)->orderBy('title')->paginate(CommonConstants::PAGINATION_COUNT);
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


        public function listBYPhotoAlbum()
        {

            // TODO: Implement listBYPhotoAlbum() method.
            return $this->model->pluck('title' , 'id');
        }


        public function count($type)
        {

            // TODO: Implement listBYPhotoAlbum() method.
            return $this->model->where('type' , '=' , $type)->count();
        }


        public function sumOfPhotoSize($id)
        {

            return DB::table('photos')->where('album_id' , '=' , $id)->sum('size');
        }


        public function getAlbumByAlbumID($album_id)
        {

            // TODO: Implement getAlbumByAlbumID() method.
            return $this->model->where('user_id' , '=' , Auth::User()->id)->where('album_id' , '=' , $album_id)->orderBy('title')->get();

        }


        public function findParentAlbumByALbumID($album_id)
        {

//            $group = $this->group->with('children' , 'parent')->find(1);

            // TODO: Implement findParentAlbumByALbumID() method.
            return $this->model->with('children' , 'parent')->where('user_id' , '=' , Auth::User()->id)->where('id' , '=' , $album_id)->get();

        }


        public function getLastID($lastid)
        {

            // TODO: Implement getLastID() method.
            return $this->model->where('id' , '=' , $lastid)->get();
        }


        public function mergeParent($parentid)
        {
            // TODO: Implement mergeParent() method.
        }


        public function getParent($parentid)
        {
            // TODO: Implement getParent() method.

            return $this->model->where('user_id' , '=' , Auth::User()->id)->where('id' , '=' , $parentid)->get();


        }
    }