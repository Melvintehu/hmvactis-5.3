<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

use App\PdfGenerator\GeneratesMemberPdf;
use App\PdfGenerator\GeneratesNonMemberPdf;
use App\PdfGenerator\GeneratesUserPdf;
use App\PdfGenerator\GeneratesIndividualUserPdf;


class PDFController extends Controller
{

	protected $types = [
	    'aanmeldingen' => GeneratesNonMemberPdf::class,
	    'leden' => GeneratesMemberPdf::class,
	    'niet-leden' => GeneratesUserPdf::class,
	    'user' => GeneratesIndividualUserPdf::class,
    ];

    private function normalize($slug)
    {
        $slug = explode('/', $slug);
        $slug[1] = isset($slug[1]) ? $slug[1] : "";

        return $slug;
    }

    public function generate($typeOfGenerate)
    {
        $slug = $this->normalize($typeOfGenerate);
        $typeOfGenerate = $slug[0];
        $data = $slug[1];

        if(is_numeric($data)){
            if(Auth::user()->id != intval($data)){

                if( Auth::user()->admin != 1) {
                    abort(403, 'Access denied.');
                }
            }
        }

        if(isset($this->types[$typeOfGenerate])){

            return (new $this->types[$typeOfGenerate]($data))->generate();
        }
    }

}
