<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Contracts\Session\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the blog posts in it from the database
        // $all_posts = Post::orderBy('id', 'desc')->paginate(5);
        $all_posts = Post::orderBy('id', 'desc')->simplePaginate(5);
        // $all_posts = Post::simplePaginate(5);

        //return a view and pass in the above variable that has all the blog post
        return view('posts.index1')->with('allposts', $all_posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'title' => 'required|max:255', 
            'description' => 'required'
        ));

        //store in the database
        $post =new Post;

        $post->title = $request->title;
        $post->description = $request->description;
        // table_column_name = http_request_variable_submitted from form
            
        $post->save();

        // Session::put('key', 'value');
        // Session::put('key', 'value');
        // Session::flash('success', 'The blog post was sucessfully saved !'); //create session message
        $request->session()->flash('success', 'The blog post was sucessfully saved !');


        //redirect in another page
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//id of a post to be displayed //find the view with this given id number and show/display it to the user
    {
        $postvar = Post::find($id); // find a post using primary id of that  and store all post_info in variable called as $postvar
        return view('posts.show')->with('postinfo', $postvar); //redirect to view/posts/show.blade.php and also pass post_info hold by $postvar (object/varriable) to this view through a name that we use to call post info in view which in this case is 'postinfo'. We can do all these using with command
        // return view_page->with('name_to_call_post_information', post_information);
        // return view('posts.show') ==> render the view
        // ->with('postinfo', $postvar); pass variable called postinfo and set variable_postinfo equal to variable_$postvar which holds all post data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in database and save it in a variable
        $apost = Post::find($id); //$apost is a model object

        //return the view and pass in the info of post that was previously pulled from database
        return view('posts.edit')->with('postinfo', $apost); //pass model_object($apost) into view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Validate the data
        $this->validate($request, array(
            'title' => 'required|max:255', 
            'description' => 'required'
        ));

        //save the data to the database
        $updated_post = Post::find($id);

        $updated_post->title = $request->input('title');
        $updated_post->description = $request->input('description');
        // table_column_name = http_request_name_submitted from form
        //created at is same and laravel automaticaly save that
        $updated_post->save();

        //set flash data with success message
        $request->session()->flash('success', 'The blog post was sucessfully saved !');

        //redirect to post.show with flash data
        return redirect()->route('posts.show', $updated_post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_post = Post::find($id);
        $del_post-> delete();
        return redirect()->route('posts.index');
    }
}
