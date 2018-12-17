<?php

namespace App\Http\Controllers;

use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $settingsRepository;

    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    public function index()
    {
        $settings = $this->settingsRepository->all()->first();
        return view('about', compact('settings'));
    }
}
