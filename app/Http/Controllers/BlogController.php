<?php

namespace App\Http\Controllers;

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
        $form_data = [
            'title' => 'Ini Blog SPBE',
            'description' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
            'created_user_id' => 1
        ];
        $blog = $this->BlogService->create($form_data);
        return $blog;
    }
}
