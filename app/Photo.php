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

	public static function uniqueFilename($file)
	{
		return Carbon::now()->toDateString() . '-' .Carbon::now()->second . '-' . $file->getClientOriginalName();
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

  public static function make($type, $model_id, $filename)
  {
    return Photo::create([
        'filename' => $filename,
          'type' => $type,
          'model_id' => $model_id
      ]);
  }



	public static function makeOrUpdate($type, $model_id, $filename)
	{
		$photo = Self::exists($type, $model_id);
        if($photo === null) {
            $photo = Photo::create([
	            'filename' => $filename,
                'type' => $type,
                'model_id' => $model_id
            ]);
        }else{

          if(file_exists($photo->dir() . $photo->filename)){
          	if($photo->multiple != true) {
                File::delete($photo->dir() . $photo->filename);
          	}
          }
          $photo->filename = $filename;
          $photo->update();
        }
        return $photo;
	}

  public static function forUpdate($photo_id, $file)
  {

    $photo = Photo::find($photo_id);
    $photo->update([
        'filename' => Self::uniqueFilename($file),
    ]);
    Self::checkDirectory($photo->dir());
    Image::make($file)->save($photo->dir() . $photo->filename);
    return $photo;
  }


  public static function forMultiModel($type, $model_id, $file)
  {

    $filename = Self::uniqueFilename($file);
    $photo = Photo::make($type, $model_id, $filename);
    Self::checkDirectory($photo->dir());
    Image::make($file)->save($photo->dir() . $photo->filename);

    return $photo;
  }

	public static function forModel($type, $model_id, $file, $multi = false)
	{

		$filename = Self::uniqueFilename($file);

		$photo = Photo::makeOrUpdate(
			$type,
			$model_id,
			$filename
		);

    Self::checkDirectory($photo->dir());
    Image::make($file)->save($photo->dir() . $photo->filename);

		return $photo;
	}


}
