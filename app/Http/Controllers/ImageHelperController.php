<?php

namespace App\Http\Controllers;

use Image;
use App\Photo;
use Illuminate\Http\Request;
use App\Classes\ImageCropper;

class ImageHelperController extends Controller
{
	public function index(Request $request)
	{
		$width = $request->get('width');
		$height = $request->get('height');
		$x = $request->get('x');
		$y = $request->get('y');

		$photo = Photo::getByRequest($request);
		$photo->crop($width, $height, $x, $y);

		return response()->json(['croppedImage' =>  $photo->croppedDir() . $photo->filename], 200 );
	}

}
