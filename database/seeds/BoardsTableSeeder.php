<?php


use App\Board;
use Illuminate\Database\Seeder;




class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$boards = Board::all();

    	foreach($boards as $board){
    		$board->delete();
    	}


    	$boards = [
    		[
    			'name' => '2015 - 2016',
    			
			],
            [
                'name' => '2014 - 2015',
               
            ],
            [
                'name' => '2013 - 2014',
               
            ],
            [
                'name' => '2012 - 2013',
                
            ],
            [
                'name' => '2011 - 2012',
               
            ],
          
    	];


    	foreach($boards as $board){
    		$newBoard = new Board;

    		$newBoard->name = $board['name'];
    

    		$newBoard->save();

    	}
    }
}
