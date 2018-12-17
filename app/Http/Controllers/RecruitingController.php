<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use App\Repositories\RecruitingRepository;
use Illuminate\Http\Request;

class RecruitingController extends Controller
{
    protected $recruitingRepository;
    protected $pageRepository;

    public function __construct(RecruitingRepository $recruitingRepository, PageRepository $pageRepository)
    {
        $this->recruitingRepository = $recruitingRepository;
        $this->pageRepository = $pageRepository;
    }

    public function index()
    {
        $recruitings = $this->recruitingRepository->all();

        return view('recruiting', compact('recruitings'));
    }

    public function detail($slug)
    {
        $recruiting = $this->recruitingRepository->findWhere(['slug' => $slug])->first();
        $blogs = $this->pageRepository->all();

        return view('recruiting.detail', compact('recruiting', 'blogs'));
    }
}
