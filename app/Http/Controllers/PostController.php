<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Image;
use File;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index', [
            'posts' => $posts,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.posts.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $input = $request->all();

        $rules = [
         'title' => 'unique:posts|required|max:255',
         'content' => 'required',
         'image' => 'required',
         'image.*' => 'mimes:jpeg,png,jpg|max:800',
        ];
        $messages = [
            'title.unique' => 'Ya existe un Atrículo con este nombre',
            'title.required' => 'El campo "título" es obligatorio',
            'content.required' => 'El campo "contenido" es obligatorio',
            'image.required' => 'Debes subir una foto',
            'image.mimes' => 'El archivo debe ser una imágen',
            'image.max' => 'La imagen no debe pesar más de 800KB'
        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('back/posts/create')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            //dd($request->imagen);
            $a = new Post;
            $a->title = $request->input('title');
            $a->video = $request->input('video');
            $a->content = $request->input('content');
            $a->page_title = $request->input('page_title');
            $a->meta_descr = $request->input('meta_descr');
            $a->category_id = $request->input('category');
            $a->slug = str_slug($a->title);

            //  Crear Imagen
            //dd($image);
            $image = Input::file('image');
            $file_name = str_random(16).'.'.$image->getClientOriginalExtension();
            $image->move('img/article_pictures/', $file_name);
            $a->image = 'img/article_pictures/'.$file_name;

            $a->save();

            return redirect('back/posts/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('backend.posts.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('backend.posts.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $input = $request->all();
        $a = Post::find($id);
        $rules = [
         'title' => 'unique:posts,title,'.$a->id.'|required|max:255',
         'content' => 'required',
         'imagen.*' => 'mimes:jpeg,png,jpg|max:800'
        ];
        $messages = [
            'title.unique' => 'Ya existe un Atrículo con este nombre',
            'title.required' => 'El campo "título" es obligatorio',
            'content.required' => 'El campo "contenido" es obligatorio',
            'imagen.mimes' => 'El archivo debe ser una imágen',
            'imagen.max' => 'La imagen no debe pesar más de 800KB'
        ];

       $validator = Validator::make($input, $rules, $messages);
       if ( $validator->fails() ) {
       return redirect('back/posts/'.$id.'/edit')
                   ->withErrors( $validator )
                   ->withInput();
        } else {
            //dd($request->imagen);
            $a->title = $request->input('title');
            $a->video = $request->input('video');
            $a->content = $request->input('content');
            $a->page_title = $request->input('page_title');
            $a->meta_descr = $request->input('meta_descr');
            $a->category_id = $request->input('category');
            $a->slug = str_slug($a->title);


            if ($request->image) {  //  Si hay imágenes
                // Eliminar imagen
                $file = $a->image;
                $filename = public_path($file);
                File::delete($filename);

                $image = Input::file('image');
                $file_name = str_random(16).'.'.$image->getClientOriginalExtension();
                $image->move('img/article_pictures/', $file_name);
                $a->image = 'img/article_pictures/'.$file_name;
            }
            $a->save();

            return redirect('back/posts/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Post::find($id);
        File::delete($a->image);
        $a->delete();

        return redirect('back/posts/');
    }

    public function searchResults(Request $request)
    {
     $title = $request->title;
     //dd($title);
     $posts = Post::Title($title)->get();
     //dd($posts);
     return view('backend.posts.search', [
      'posts' => $posts,
      'title' => $title
     ]);
    }
}
