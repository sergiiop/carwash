<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtype_servicesRequest;
use App\Http\Requests\Updatetype_servicesRequest;
use App\Repositories\type_servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class type_servicesController extends AppBaseController
{
    /** @var  type_servicesRepository */
    private $typeServicesRepository;

    public function __construct(type_servicesRepository $typeServicesRepo)
    {
        $this->typeServicesRepository = $typeServicesRepo;
    }

    /**
     * Display a listing of the type_services.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typeServices = $this->typeServicesRepository->paginate(10);

        return view('type_services.index')
            ->with('typeServices', $typeServices);
    }

    /**
     * Show the form for creating a new type_services.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_services.create');
    }

    /**
     * Store a newly created type_services in storage.
     *
     * @param Createtype_servicesRequest $request
     *
     * @return Response
     */
    public function store(Createtype_servicesRequest $request)
    {
        $input = $request->all();

        $typeServices = $this->typeServicesRepository->create($input);

        Flash::success('Type Services saved successfully.');

        return redirect(route('typeServices.index'));
    }

    /**
     * Display the specified type_services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typeServices = $this->typeServicesRepository->find($id);

        if (empty($typeServices)) {
            Flash::error('Type Services not found');

            return redirect(route('typeServices.index'));
        }

        return view('type_services.show')->with('typeServices', $typeServices);
    }

    /**
     * Show the form for editing the specified type_services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typeServices = $this->typeServicesRepository->find($id);

        if (empty($typeServices)) {
            Flash::error('Type Services not found');

            return redirect(route('typeServices.index'));
        }

        return view('type_services.edit')->with('typeServices', $typeServices);
    }

    /**
     * Update the specified type_services in storage.
     *
     * @param int $id
     * @param Updatetype_servicesRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetype_servicesRequest $request)
    {
        $typeServices = $this->typeServicesRepository->find($id);

        if (empty($typeServices)) {
            Flash::error('Type Services not found');

            return redirect(route('typeServices.index'));
        }

        $typeServices = $this->typeServicesRepository->update($request->all(), $id);

        Flash::success('Type Services updated successfully.');

        return redirect(route('typeServices.index'));
    }

    /**
     * Remove the specified type_services from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typeServices = $this->typeServicesRepository->find($id);

        if (empty($typeServices)) {
            Flash::error('Type Services not found');

            return redirect(route('typeServices.index'));
        }

        $this->typeServicesRepository->delete($id);

        Flash::success('Type Services deleted successfully.');

        return redirect(route('typeServices.index'));
    }
}
