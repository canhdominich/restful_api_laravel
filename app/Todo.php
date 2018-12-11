<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
	protected $table = "todos";

	public static function getAll(){
		return self::orderBy('id', 'asc')->paginate(4);
    	// return Todo::all();
	}

	public static function storeData($data){

		$todo = new Todo;

		$todo->todo = $data['todo'];

		$todo->save();

		return $todo;
	}

	public static function updateData($id, $data){
		$todo = Todo::find($id);
		$todo->todo = $data['todo'];
		$todo->save();
		return $todo;
	}

}
