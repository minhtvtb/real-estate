<?php

namespace App\Http\Controllers;

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

    /**
     * PagesController constructor.
     *
     * @param PageRepository $repository
     * @param PageValidator $validator
     */
    public function __construct(PageRepository $repository, PageValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->repository->all();

        return view('blog', compact('blogs'));
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

        return view('blog.detail', compact('page'));
    }
}
