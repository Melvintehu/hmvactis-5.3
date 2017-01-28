<?php 

namespace App\Tablefy;

class HorizontalTable
{

	private $data;
	private $table;

	public function __construct($data)
	{	
		$this->data = $data;
	}

	public function show()
	{	
		$this->table = "";
		
		$this->table .= $this->data->map(function($item, $key){
			$this->table .= "<tr>";

			$html = "";

			foreach($item as $value){
				$html .= "<td> ". $value ."  </td>";
			}

			$this->table .= $html;
			$this->table .= "</tr>";
		});
		return $this->table;
		// dd($this->table);
	}




}