<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $BlogService;
    function __construct(
        BlogService $BlogService
    ) {
        $this->BlogService = $BlogService;
    }

    public function index()
    {
        $blogs = $this->BlogService->getData();
        return view('blog.index',[
            'data_blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('blog.form');
    }

    public function store(Request $request)
    {
        $user = User::query()->first();
        $request['created_user_id'] = $user->id;
        $this->BlogService->create($request->all());
        return redirect()->route('blog.index');
    }
}
