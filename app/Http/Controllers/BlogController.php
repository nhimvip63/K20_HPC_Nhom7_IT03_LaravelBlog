<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = blog::get();
        return view('blog.index', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $object = new blog();
        $object->fill($request->except('_token'));
        $object->save();

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    public function edit(blog $blog)
    {
        return view('blog.edit', [
            'each' => $blog,
        ]);
    }

    public function update(Request $request, blog $blog)
    {
        $blog->update(
            $request->except([
                '_token',
                '_method',
            ])
        );
        return redirect()->route('blog.index');
    }

    public function destroy(blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
