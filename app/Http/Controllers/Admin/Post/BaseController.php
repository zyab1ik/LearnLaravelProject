<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Service\PostService;

class BaseController extends Controller
{
    public PostService $service;

    public function __construct(PostService $postService)
    {
        $this->service = $postService;
    }
}
