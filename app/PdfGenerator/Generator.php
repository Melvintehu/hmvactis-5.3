<?php 

namespace App\PdfGenerator;

use App;

abstract class Generator
{
	protected $html;
	protected $data;
	protected $title;
	protected $body;

	public function __construct($data)
	{
		$this->boot($data);
	}

	abstract function boot($data);

	public function generate()
	 { 
	  $pdf = App::make('dompdf.wrapper');
	  $this->html = 
	  '<!DOCTYPE html><head>
	        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	        <link href="css/app.css" rel="stylesheet">
	        <title>'. $this->title .'</title>
	        </head>
	        <body>
	        ';

	        $this->html .= $this->body;

	        $this->html .= "</body></html>";
	    $pdf->loadHTML($this->html);
	    return $pdf->stream();
	 }


}