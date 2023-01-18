<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Validator;

class PostController extends Controller
{
    // /**
    //  * @var InjectionController
    //  */
    // protected $injection;
    // public function __construct(InjectionController $injection){
    //     $this->injection = $injection;
    // }
   
    // public function __construct(){
    //     // $this->middleware('auth', [
    //     //     'only' => 'store'
    //     // ]);
    // }
    public function index(){
        $posts = Post::all();
        // var_dump($posts);
        
        return view('blog.index',compact('posts'));
    }
    public function show($id){
       /** @var Post $post */
        $post = Post::findOrFail($id);
        return view('bog.singlepost',compact('post'));
    }

    public function store(Request $request){
        $valditor = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if($valditor->fails()){
            return redirect('post/create')
                ->withErrors($valditor)
                ->withInput();
        }


        $post = Post::create($request->except('csrf'));
        return redirect(url('/'));

        
    }

    public function create(){
        return view('dashboard.blog.create');
    }
    public function update(Request $request, $id) {
        $data = [
        'title' => $request->title,
        'body' => $request->body,
        ];
        
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post->toJson();
        }
    public function destroy($id)
    {
        Post::destroy($id);
        return 1;
    }
}

