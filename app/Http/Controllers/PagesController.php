<?php

namespace App\Http\Controllers;

use App\Repositories\SettingsRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\PageCreateRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Repositories\PageRepository;
use App\Validators\PageValidator;

/**
 * Class PagesController.
 *
 * @package namespace App\Http\Controllers;
 */
class PagesController extends Controller
{
    /**
     * @var PageRepository
     */
    protected $repository;

    /**
     * @var PageValidator
     */
    protected $validator;

    protected $settingRepository;

    /**
     * PagesController constructor.
     *
     * @param PageRepository $repository
     * @param PageValidator $validator
     * @param SettingsRepository $settingsRepository
     */
    public function __construct(PageRepository $repository, PageValidator $validator, SettingsRepository $settingsRepository)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
        $this->settingRepository = $settingsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->repository->all();
        $settings = $this->settingRepository->all()->first();

        return view('blog', compact('blogs', 'settings'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $page = $this->repository->findWhere(['slug' => $slug])->first();
        $blogs = $this->repository->all();
        $settings = $this->settingRepository->all()->first();

        return view('blog.detail', compact('page', 'blogs', 'settings'));
    }
}
