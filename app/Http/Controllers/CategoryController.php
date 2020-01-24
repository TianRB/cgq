<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;

class CategoryController extends Controller
{

	private $prefix = 'back.categories.'; // Para Rutas
	private $viewPrefix = 'backend.categories.'; // Para Vistas

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		return view($this->viewPrefix.'index', ['categories' => Category::all()]);
	}

	public function create(){
		return view($this->viewPrefix.'create');
	}

	public function store(Request $request){
		// dd($request->all());
		$input = $request->all();

		$rules = [
			'name' => 'unique:categorias|required|max:255'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = new Category;
			$m->fill($request->all());
			$m->slug = str_slug($request->input('name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	public function show($id){
		return view($this->viewPrefix.'show', ['c' => Category::find($id)]);
	}

	public function edit($id){
		return view($this->viewPrefix.'edit', ['c' => Category::find($id)]);
	}

	public function update(Request $request, $id){
		// dd($request->all());
		$input = $request->all();

		$rules = [
			'name' => 'required|max:255'
		];
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			return redirect()->back()
			->withErrors($validator)
			->withInput();
		} else {
			$m = Category::find($id);
			$m->update($request->all());
			$m->slug = str_slug($request->input('display_name'));
			$m->save();
			return redirect()->route($this->prefix.'index');
		}
	}

	public function destroy($id){
		$m = Category::find($id);
		// dd($a);
		foreach ($m->posts as $a) {
			$undefinedCategory = Category::where('slug', 'sin-definir')->first();
			$a->category_id = $undefinedCategory->id;
			$a->save();
		}
		$m->delete();
		return redirect()->route($this->prefix.'index');
	}
}
