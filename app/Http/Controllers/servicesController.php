<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateservicesRequest;
use App\Http\Requests\UpdateservicesRequest;
use App\Repositories\servicesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\type_services;
use App\Models\Services_Status;
use Flash;
use Response;

class servicesController extends AppBaseController
{
    /** @var  servicesRepository */
    private $servicesRepository;

    public function __construct(servicesRepository $servicesRepo)
    {
        $this->servicesRepository = $servicesRepo;
    }

    /**
     * Display a listing of the services.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $services = $this->servicesRepository->paginate(10);

        return view('services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new services.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_servicio=type_services::pluck('description','id');
        $estados=Services_Status::pluck('status','id');
        $datos = ['tipos' => $tipo_servicio, 'estados' => $estados];

        return view('services.create')->with('datos', $datos);
    }

    /**
     * Store a newly created services in storage.
     *
     * @param CreateservicesRequest $request
     *
     * @return Response
     */
    public function store(CreateservicesRequest $request)
    {
        $input = $request->all();

        $services = $this->servicesRepository->create($input);

        Flash::success('Services saved successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Display the specified services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified services.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $ts=type_services::pluck('description','id');
        $es=Services_Status::pluck('status','id');

        $datos = ['tipos' => $ts, 'estados' => $es, 'services' => $services];

        return view('services.edit')->with('datos',$datos);
    }

    /**
     * Update the specified services in storage.
     *
     * @param int $id
     * @param UpdateservicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateservicesRequest $request)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $services = $this->servicesRepository->update($request->all(), $id);

        Flash::success('Services updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified services from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $this->servicesRepository->delete($id);

        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
}
