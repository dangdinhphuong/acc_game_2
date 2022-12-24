<?php

namespace App\Repositories;


use Illuminate\Container\Container as Application;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use  App\Models\Authme;

class CustomerRepository
{
    protected $model;
    public function __construct(Authme $model)
    {
         $this->model = $model;
    }


    public function getCustomer($request)
    {
       $data = $this->model->filter(request(['id','username', 'realname','email']))->paginate(10);
       return $data ;
    }

    public function create($data)
    {

    }

    public function createUploadImages($data, $column = "background_image")
    {
        $data = request()->all();

        if (isset($data[$column])) {
            foreach ($data[$column] as $imageId => $image) {
                $file = $column . '.' . $imageId;

                $dir = config('wheel.wheel_image_upload_path');
                if ($image instanceof UploadedFile) {
                    if (request()->hasFile($file)) {
                        $data['background_image'] = request()->file($file)->store($dir);
                        url("cache/original/" . request()->file($file)->store($dir));
                    }
                }
            }
        }
        return $data;
    }
    public function uploadImages($data, $game, $column = "background_image")
    {
        $data = request()->all();

        if (isset($data[$column])) {
            foreach ($data[$column] as $imageId => $image) {
                $file = $column . '.' . $imageId;

                $dir = config('wheel.wheel_image_upload_path');
                if ($image instanceof UploadedFile) {
                    if (request()->hasFile($file)) {
                        $data['background_image'] = request()->file($file)->store($dir);
                        url("cache/original/" . request()->file($file)->store($dir));
                    } else if ($game->background_image) {
                        Storage::delete($game->background_image);
                    }
                } else {
                    $data['background_image'] = $game->background_image;
                }
            }
        }
        return $data;
    }

    public function update($data, $game)
    {

       
    }

    public function delete($wheel)
    {
    }
}
