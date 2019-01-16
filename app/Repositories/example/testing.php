<?php
namespace App\Repositories\example;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;

class FilmsRepository extends Repository {

    public function model() {
        return 'App\Models\Film\film';
    }
    public function getall()
    {
    	return $this->makeModel->all();
    }
}