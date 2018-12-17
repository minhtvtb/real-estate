<?php

namespace App\Http\Controllers;

use App\Repositories\PageRepository;
use App\Repositories\RecruitingRepository;
use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;

class RecruitingController extends Controller
{
    protected $recruitingRepository;
    protected $pageRepository;
    protected $settingsRepository;

    public function __construct(
        RecruitingRepository $recruitingRepository,
        PageRepository $pageRepository,
        SettingsRepository $settingsRepository
    )
    {
        $this->recruitingRepository = $recruitingRepository;
        $this->pageRepository = $pageRepository;
        $this->settingsRepository = $settingsRepository;
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
        $settings = $this->settingsRepository->all()->first();

        return view('recruiting.detail', compact('recruiting', 'blogs', 'settings'));
    }
}
