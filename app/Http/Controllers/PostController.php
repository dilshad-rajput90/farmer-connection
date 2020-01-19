<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\PostType;
use App\Post;
use App\Attachment;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function index()
    {

    $data['data'] =   Category::All()->toArray();
    $data['post_type'] =   PostType::All()->toArray();

    // dd($data);

        return view('layouts/admin/add_post_form',$data);

    }


    public function add_post_process(Request $request)
    {

        $data = $request->all();
        // dd($data);


        $category = $request->input('category');
        // dd($category);
        $data['title'] = $request->input('title');
        $data['summary'] = $request->input('summary');
        $data['post_content'] = $request->input('description');
        $data['author_id']  = Auth::user()->id;
        $data['post_type_id'] = $request->input('post_type_id');

        $post =  Post::create($data);
        // dd($post);
        $post->Category()->attach($category);

        if($request->has('attach_file'))
        {

           $file_name =  $request->file('attach_file')->getClientOriginalName();
           $extension =  $request->file('attach_file')->getClientOriginalExtension();

            // dd($file_name);

            // dd($extension);

            if($extension == 'jpg')
            {

                $request->file('attach_file')->storeAs('public/images',$file_name);
                $mime_type_id = 7;
            }

          else if($extension == 'png')
            {

                $request->file('attach_file')->storeAs('public/images',$file_name);
                $mime_type_id = 2;
            }

          else if($extension == 'ppt')
            {

                $request->file('attach_file')->storeAs('public/images',$file_name);
                $mime_type_id = 3;
            }

          else if($extension == 'mp4')
            {

                $request->file('attach_file')->storeAs('public/images',$file_name);
                $mime_type_id = 4;
            }

         else if($extension == 'jpeg')
            {

                $request->file('attach_file')->storeAs('public/images',$file_name);
                $mime_type_id = 6;
            }

            else
            {
                return back()->with('You have Invalid file Attached');
            }

            // $file_name_except_extension =   pathinfo($request->file('attach_file')->getClientOriginalName(),PATHINFO_FILENAME);

            $data['mime_type_id'] = $mime_type_id;
            $data['path']         = $file_name;
            $data['post_id']      = $post->id;

            Attachment::create($data);

            return back()->with('post Added Successfully');

        }

    }

    public function delete_post($id)
    {

       $data = Post::with('Attachment')
                    ->find($id)
                    ->delete();

            return back()->with('post Deleted Successfully');
    }

    public function edit_post($id)
    {

    $data['data'] = Post::where('id','=',$id)->with('Attachment')->get()->toArray();
    // $data['data'] = Post::find($id)->with('Attachment')->get()->toArray();

    $data['category'] = Post::with(['category','attachment'])->get()->toArray();

        // dd($data['category']);

        // dd($data);

    return view('layouts/admin/edit_post_form',$data);

    }

    public function edit_post_process(Request $request,$id)
    {

        $title = $request->input('title');
        $summary = $request->input('summary');
        $post_content = $request->input('description');

                 Post::where('id','=',$id)
                       ->update([
                            'title'=>$title,
                            'summary'=>$summary,
                            'post_content'=>$post_content,
                             ]);
            // $value = Post::find($id);

            $category = $request->input('category');
            // dd($category);

           $result =  Post::find($id);

               $rr =  $result->category()->sync($category);


            // dd($rr);

            if($request->has('attach_file'))

            {

                $file_name =  $request->file('attach_file')->getClientOriginalName();

              $request->file('attach_file')->storeAs('public/images',$file_name);

                    Attachment::where('post_id','=', $id)
                        ->update(['path'=> $file_name]);

                   return back()->with('successfully updated');
            }




    }


}
