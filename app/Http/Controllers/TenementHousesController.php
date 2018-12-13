<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\EenementHouseCreateRequest;
use App\Http\Requests\EenementHouseUpdateRequest;
use App\Repositories\EenementHouseRepository;
use App\Validators\EenementHouseValidator;

/**
 * Class EenementHousesController.
 *
 * @package namespace App\Http\Controllers;
 */
class TenementHousesController extends Controller
{
    /**
     * @var EenementHouseRepository
     */
    protected $repository;

    /**
     * @var EenementHouseValidator
     */
    protected $validator;

    /**
     * EenementHousesController constructor.
     *
     * @param EenementHouseRepository $repository
     * @param EenementHouseValidator $validator
     */
    public function __construct(EenementHouseRepository $repository, EenementHouseValidator $validator)
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
        $eenementHouses = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $eenementHouses,
            ]);
        }

        return view('projects.tenement', compact('eenementHouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  EenementHouseCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(EenementHouseCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $eenementHouse = $this->repository->create($request->all());

            $response = [
                'message' => 'EenementHouse created.',
                'data'    => $eenementHouse->toArray(),
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
        $eenementHouse = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $eenementHouse,
            ]);
        }

        return view('eenementHouses.show', compact('eenementHouse'));
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
        $eenementHouse = $this->repository->find($id);

        return view('eenementHouses.edit', compact('eenementHouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  EenementHouseUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(EenementHouseUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $eenementHouse = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'EenementHouse updated.',
                'data'    => $eenementHouse->toArray(),
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
                'message' => 'EenementHouse deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'EenementHouse deleted.');
    }
}
