<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var PostRepository
     */
    protected $postRepository;

    /**
     * @var $pageRepository
     */
    protected $pageRepository;

    /**
     * PostsController constructor.
     *
     * @param PostRepository $postRepository
     * @param PageRepository $pageRepository
     */
    public function __construct(PostRepository $postRepository, PageRepository $pageRepository)
    {
        $this->postRepository = $postRepository;
        $this->pageRepository = $pageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->findWhere(['status' => 'PUBLISHED']);
        $blogs = $this->pageRepository->findWhere(['status' => 'ACTIVE']);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $posts,
            ]);
        }

        return view('home', compact('posts', 'blogs'));
    }
}
