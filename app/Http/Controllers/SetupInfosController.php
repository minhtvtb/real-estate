<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SetupInfoCreateRequest;
use App\Http\Requests\SetupInfoUpdateRequest;
use App\Repositories\SetupInfoRepository;
use App\Validators\SetupInfoValidator;

/**
 * Class SetupInfosController.
 *
 * @package namespace App\Http\Controllers;
 */
class SetupInfosController extends Controller
{
    /**
     * @var SetupInfoRepository
     */
    protected $repository;

    /**
     * @var SetupInfoValidator
     */
    protected $validator;

    /**
     * SetupInfosController constructor.
     *
     * @param SetupInfoRepository $repository
     * @param SetupInfoValidator $validator
     */
    public function __construct(SetupInfoRepository $repository, SetupInfoValidator $validator)
    {
        parent::__construct();
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
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $setupInfos = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $setupInfos,
            ]);
        }

        return view('setupInfos.index', compact('setupInfos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SetupInfoCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(SetupInfoCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $setupInfo = $this->repository->create($request->all());

            $response = [
                'message' => 'SetupInfo created.',
                'data'    => $setupInfo->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setupInfo = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $setupInfo,
            ]);
        }

        return view('setupInfos.show', compact('setupInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setupInfo = $this->repository->find($id);

        return view('setupInfos.edit', compact('setupInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SetupInfoUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(SetupInfoUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $setupInfo = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'SetupInfo updated.',
                'data'    => $setupInfo->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'SetupInfo deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'SetupInfo deleted.');
    }
}
