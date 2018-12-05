<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use App\Http\Requests\StorePostRequest;                

class PostsController extends Controller
{
    public function index()
    {
    	//$posts = Post::where('user_id', auth()->id())->get();

        $posts = auth()->user()->posts; //filtrado por la relación de los posts del usuario autenticado
    	return view('admin.posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $this->authorize('create', new Post);

        $this->validate($request, ['title' => 'required|min:5|unique:posts']);

        $post = Post::create([
            'title' => $request->get('title'),
            'user_id' => auth()->id()
        ]);

        return redirect()->route('admin.posts.edit', $post);
    		
    }

    public function update(Post $post, StorePostRequest $request)
    {
        $this->authorize('update', $post);

        $post->update($request->all());

        $post->syncTags($request->get('tags'));

        return redirect()->route('admin.posts.edit', $post)->with('flash', 'La publicación ha sido guardada');

    }

    public function edit(Post $post)
    {

        $this->authorize('view', $post);

        return view('admin.posts.edit', [
            'post' => $post,
            'tags' => Tag::all(),
            'categories' => Category::all()
        ]);        
        
    }

    public function destroy(Post $post)
    {
        // las etiquetas y fotos se elimanan en el modelo post al elimanr el post
        //$post->tags()->detach(); accede a la relación tags y elimina las etiquetas con el metodo detach

        // $post->photos()-delete(); ->con este metodo se eliminan las fotos de la base de datos pero no ejecuta el metodo boot del modelo photo

        //foreach($post->photos has photo)
        //{
            //$photo->delete
        //} -> con este metodo se eliminana de la base y del servidor

        //$post->photos->each(function($photo){
        //    photo->delete();
        //}); ->metodo each de la clase colection

        //$post->photos->each->delete(); encadena el metodo each al metodo delete, por cada foto se ejecuta el metodo delete
        $this->authorize('delete', $post);
        $post->delete();

        return redirect()
            ->route('admin.posts.index')
            ->with('flash', 'LA publicación ha sido eliminada');
    }

}
