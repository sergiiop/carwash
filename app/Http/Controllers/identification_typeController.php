<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createidentification_typeRequest;
use App\Http\Requests\Updateidentification_typeRequest;
use App\Repositories\identification_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class identification_typeController extends AppBaseController
{
    /** @var  identification_typeRepository */
    private $identificationTypeRepository;

    public function __construct(identification_typeRepository $identificationTypeRepo)
    {
        $this->identificationTypeRepository = $identificationTypeRepo;
    }

    /**
     * Display a listing of the identification_type.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $identificationTypes = $this->identificationTypeRepository->paginate(10);

        return view('identification_types.index')
            ->with('identificationTypes', $identificationTypes);
    }

    /**
     * Show the form for creating a new identification_type.
     *
     * @return Response
     */
    public function create()
    {
        return view('identification_types.create');
    }

    /**
     * Store a newly created identification_type in storage.
     *
     * @param Createidentification_typeRequest $request
     *
     * @return Response
     */
    public function store(Createidentification_typeRequest $request)
    {
        $input = $request->all();

        $identificationType = $this->identificationTypeRepository->create($input);

        Flash::success('Identification Type saved successfully.');

        return redirect(route('identificationTypes.index'));
    }

    /**
     * Display the specified identification_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $identificationType = $this->identificationTypeRepository->find($id);

        if (empty($identificationType)) {
            Flash::error('Identification Type not found');

            return redirect(route('identificationTypes.index'));
        }

        return view('identification_types.show')->with('identificationType', $identificationType);
    }

    /**
     * Show the form for editing the specified identification_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $identificationType = $this->identificationTypeRepository->find($id);

        if (empty($identificationType)) {
            Flash::error('Identification Type not found');

            return redirect(route('identificationTypes.index'));
        }

        return view('identification_types.edit')->with('identificationType', $identificationType);
    }

    /**
     * Update the specified identification_type in storage.
     *
     * @param int $id
     * @param Updateidentification_typeRequest $request
     *
     * @return Response
     */
    public function update($id, Updateidentification_typeRequest $request)
    {
        $identificationType = $this->identificationTypeRepository->find($id);

        if (empty($identificationType)) {
            Flash::error('Identification Type not found');

            return redirect(route('identificationTypes.index'));
        }

        $identificationType = $this->identificationTypeRepository->update($request->all(), $id);

        Flash::success('Identification Type updated successfully.');

        return redirect(route('identificationTypes.index'));
    }

    /**
     * Remove the specified identification_type from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $identificationType = $this->identificationTypeRepository->find($id);

        if (empty($identificationType)) {
            Flash::error('Identification Type not found');

            return redirect(route('identificationTypes.index'));
        }

        $this->identificationTypeRepository->delete($id);

        Flash::success('Identification Type deleted successfully.');

        return redirect(route('identificationTypes.index'));
    }
}
