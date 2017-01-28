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
	protected $fillable = [
		'filename',
		'type',
		'model_id',
	];

	public static function getByRequest($request)
	{
		$photo = json_decode( $request->get('photo') );
		$photo = Photo::find($photo->id);
		return $photo;
	}

	public function crop($width, $height, $x, $y)
	{
		ImageCropper::make($this->dir() . $this->filename)
			->percentageCrop(
				$width,
				$height, [
					$x,
					$y
				])
			->save($this->croppedDir() . $this->filename);
	}

	public function croppedDir()
	{
		$dir = 'images/' . $this->type . '/' . $this->model_id . '/cropped/';

		return $dir;
	}

	public function dir()
	{
		$dir = 'images/' . $this->type . '/';

		if(!is_dir($dir)) {
			mkdir($dir);
			mkdir($dir . $this->model_id . '/');
			mkdir($dir . $this->model_id . '/cropped/');
		}

		$dir .= $this->model_id . '/';
		return $dir;
	}

	private static function checkMigration()
	{
		if(!Schema::hasTable('photos')) {
			$process = new Process('php artisan migrate');
			$process->setWorkingDirectory(base_path());
			$process->run();

			if (!$process->isSuccessful()) {
			    throw new ProcessFailedException($process);
			}
		}
	}

	private static function uniqueFilename($file)
	{
		return Carbon::now()->toDateString() . ' ' .Carbon::now()->second . '-' . $file->getClientOriginalName();
	}

	public static function forModel($type, $model_id, $file)
	{
		// Self::checkMigration();
		$filename = Self::uniqueFilename($file);

        $photo = Photo::where([
            'type' => $type,
            'model_id' => $model_id
        ])->first();

        if($photo === null) {
            $photo = Photo::create([
	            'filename' => $filename,
                'type' => $type,
                'model_id' => $model_id
            ]);
        }else{
            if(file_exists($photo->dir() . $photo->filename)){
                File::delete($photo->dir() . $photo->filename);
                File::delete($photo->croppedDir() . $photo->filename);
            }
            $photo->filename = $filename;
            $photo->update();
        }

        Image::make($file)->save($photo->dir() . $photo->filename);

		return $photo;
	}

}
