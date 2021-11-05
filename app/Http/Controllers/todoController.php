<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
class todoController extends Controller
{
   public function index(Request $request)
    {
        $items = todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request){
        $this->validate($request, todo::$rules);
        $todo = new todo;
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function update(Request $request){
        $this->validate($request, todo::$rules);
        $todo = todo::find($request->id);
        $form = $request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        todo::find($request->id)->delete();
        return redirect('/');
    }
}
