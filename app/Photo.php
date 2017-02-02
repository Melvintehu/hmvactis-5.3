<?php

namespace App;

use File;
use Image;
use Carbon\Carbon;
use App\Classes\ImageCropper;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Process\Process;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Process\Exception\ProcessFailedException;


class Photo extends Model
{
	public $multiple;

	protected $fillable = [
		'filename',
		'type',
		'model_id',
	];

	public static function multiple()
	{
		$photo = new Self();
		$photo->multiple = true;
		return $photo;
	}

	public function dir()
	{
		$dir = 'images/' . $this->type . '/';
		Self::checkDirectory($dir);

		$dir .= $this->model_id . '/';
		Self::checkDirectory($dir);

		return $dir;
	}

	private static function uniqueFilename($file)
	{
		return Carbon::now()->toDateString() . ' ' .Carbon::now()->second . '-' . $file->getClientOriginalName();
	}

	public static function checkDirectory($dir)
	{
		if(!is_dir($dir)) {
			mkdir($dir);
		}
	}

	public static function exists($type, $model_id)
	{
		return Photo::where([
            'type' => $type,
            'model_id' => $model_id
        ])->first();
	}

	public static function makeOrUpdate($type, $model_id, $filename)
	{
		$photo = Self::exists($type, $model_id);

		// if photo is null
        if($photo === null) {
            $photo = Photo::create([
	            'filename' => $filename,
                'type' => $type,
                'model_id' => $model_id
            ]);
        }else{
        	// else delete the reference
            if(file_exists($photo->dir() . $photo->filename)){
            	if($photo->multiple != true) {
	                File::delete($photo->dir() . $photo->filename);
            	}
            }

            // set new filename
            // update photo
            $photo->filename = $filename;
            $photo->update();
        }
        return $photo;
	}



	public static function forModel($type, $model_id, $file, $multi = false)
	{
		// Self::checkMigration();
		$filename = Self::uniqueFilename($file);

		$photo = Photo::makeOrUpdate(
			$type,
			$model_id,
			$filename
		);

        // save the image
		// checks if the directory exists  else makes that directory
        Self::checkDirectory($photo->dir());
        Image::make($file)->save($photo->dir() . $photo->filename);

		return $photo;
	}

	// 1. run composer
	// 2. run npm
	// 3. todo make migrations
	// 4. run migration


	// private static function checkMigration()
	// {
	// 	if(!Schema::hasTable('photos')) {
	// 		$process = new Process('php artisan migrate');
	// 		$process->setWorkingDirectory(base_path());
	// 		$process->run();

	// 		if (!$process->isSuccessful()) {
	// 		    throw new ProcessFailedException($process);
	// 		}
	// 	}
	// }

}
