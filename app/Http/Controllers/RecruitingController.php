<?php

namespace App\Http\Controllers;

use App\Repositories\RecruitingRepository;
use Illuminate\Http\Request;

class RecruitingController extends Controller
{
    protected $recruitingRepository;

    public function __construct(RecruitingRepository $recruitingRepository)
    {
        $this->recruitingRepository = $recruitingRepository;
    }

    public function index()
    {
        $recruitings = $this->recruitingRepository->all();

        return view('recruiting', compact('recruitings'));
    }

    public function detail($slug)
    {
        $recruiting = $this->recruitingRepository->findWhere(['slug' => $slug])->first();

        return view('recruiting.detail', compact('recruiting'));
    }
}
