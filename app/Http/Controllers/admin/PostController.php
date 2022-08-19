<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentRequest;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Auth;

class PostController extends Controller
{
    public function pages()
    {
        $data = [
            'title' => 'Pages',
            'activeMenu' => 'content-pages',
        ];

        return view('admin.contents.posts.index', $data);
    }


    public function createPage()
    {
        $data = [
            'title' => 'Create New Page',
            'activeMenu' => 'content-pages',
        ];

        return view('admin.contents.posts.create', $data);
    }


    public function getPages()
    {
        $posts = Post::whereType('page')->orderBy('id', 'desc')->get();

        try {
            return DataTables::of($posts)
                ->addColumn('title', function ($model) {
                    return $model->title;
                })
                ->addColumn('created_at', function ($model) {
                    return $model->created_at_datetime();
                })
                ->addColumn('actions', function ($model) {
                    return '<td>
                                 <a href="'.route('editPage', [$model->id]).'" class="btn btn-sm btn-info"><i class="fas fa-pen"></i> Edit</a>
                                 <a href="#" class="btn btn-sm btn-danger delete-page" data-id="' . $model->id . '" data-name="' . $model->title . '"><i class="far fa-trash-alt"></i> Delete</a>
                           </td>';
                })
                ->rawColumns(['title', 'post_content', 'actions'])
                ->make(true);
        } catch (Exception $e) {
            print_r("Something went wrong" . $e->getMessage());
        }

    }

    public function storePage(StoreContentRequest $request)
    {
        $user = Auth::user();
        $show_in_header_menu = $request->show_in_header_menu ? 1 : 0;
        $show_in_footer_menu = $request->show_in_footer_menu ? 1 : 0;

        $slug = unique_slug($request->title, 'Post');
        $data = [
            'user_id' => $user->id,
            'title' => $request->title,
            'slug' => $slug,
            'post_content' => $request->post_content,
            'type' => 'page',
            'status' => 1,
            'show_in_header_menu' => $show_in_header_menu,
            'show_in_footer_menu' => $show_in_footer_menu,
        ];

        $post_created = Post::create($data);

        if ($post_created) {
            return redirect()->route('pages')->with(responseMessage(1, 'success', 'Page has been created'));
        }
        return redirect()->route('pages')->with(responseMessage(0, 'error', 'Error creating page'));
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Page',
            'activeMenu' => 'content-pages',
            'post' => Post::find($id)
        ];

        return view('admin.contents.posts.edit', $data);
    }

    public function update(StoreContentRequest $request, $id)
    {

        $slug = unique_slug($request->title, 'Post');
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $slug;
        $post->post_content = $request->post_content;
        $post->show_in_header_menu = $request->show_in_header_menu ? 1 : 0;
        $post->show_in_footer_menu = $request->show_in_footer_menu ? 1 : 0;
        $post->save();

        return redirect()->route('pages')->with(responseMessage(1, 'success', 'Page has been updated'));
    }

    public function delete($id)
    {
        $delete = Post::whereId($id)->delete();
        if ($delete) {
            return response()->json(responseMessage(1, 'error', "Brand has been deleted"));
        }
        return response()->json(responseMessage(0, 'error', "Unable to delete category"));
    }


}
