<?php 

namespace App\Tablefy;

use App\Tablefy\HorizontalTable;

class Tablefy
{

	protected $data;

	protected $formats = [
		'horizontal' => HorizontalTable::class,
		'vertical' => VerticalTable::class,
	];

	public function __construct($data)
	{	
		$this->data = $data;
	}	


	public function except(array $exceptions)
	{	
		$this->data = $this->data->map(function($objectArray) use ($exceptions){
			return collect($objectArray)->except($exceptions);
		});

		return $this;
	}

	public function format($direction)
	{	

		$direction = strtolower($direction);
		if(isset($this->formats[$direction])){
			return (new $this->formats[$direction]($this->data))->show();
		}
	}

}