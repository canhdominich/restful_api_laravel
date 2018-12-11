<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    // ham tra ve tat ca ban ghi
	public function index(){
		\Carbon\Carbon::setLocale('zh');
    	// echo "hello";
		$todo = new Todo;
		$todos = $todo->getAll();
    	// var_dump($todos); die;
    	// dd($todos);
    	// dd($todos[0]->todo);
		return view('todo.index', ['zenttt' => $todos, 'title' => 'Learning Laravel', 'name' => '<h1>Canh DD </h1>']);
	}

	// ham tra ve view create
	public function create(){
		return view('todo.create');
	}

	// luu vao co so du lieu
	public function store(Request $request){
		// dd($request->all());
		// dd(request()->all());
		// dd($request->todo);
		$todo = Todo::storeData($request->all());
		return redirect('todos');
	}

	public function edit($id){
		$todo = Todo::find($id);
		return view('/todo.edit', ['zenttt' => $todo]);
	}

	public function update($id){
		Todo::updateData($id, request()->only('todo'));

		return redirect('/todos');
	}

	public function destroy($id){
		Todo::find($id)->delete();
    	return redirect('/todos');
	}
}
