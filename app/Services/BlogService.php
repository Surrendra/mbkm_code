<?php 

namespace App\Services;

use App\Models\Blog;

class BlogService
{
    public function getData()
    {
        return Blog::with('createdUser')->get();
    }

    public function find($blog_id)
    {
        // return Blog::with('createdUser')->find($blog_id);
        return Blog::with('createdUser')->where('id',$blog_id)->first();
    }

    public function create($data = [])
    {
        return Blog::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'created_user_id' => $data['created_user_id'],
        ]); 
    }
}
