<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServices_StatusRequest;
use App\Http\Requests\UpdateServices_StatusRequest;
use App\Repositories\Services_StatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Services_StatusController extends AppBaseController
{
    /** @var  Services_StatusRepository */
    private $servicesStatusRepository;

    public function __construct(Services_StatusRepository $servicesStatusRepo)
    {
        $this->servicesStatusRepository = $servicesStatusRepo;
    }

    /**
     * Display a listing of the Services_Status.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $servicesStatuses = $this->servicesStatusRepository->paginate(10);

        return view('services__statuses.index')
            ->with('servicesStatuses', $servicesStatuses);
    }

    /**
     * Show the form for creating a new Services_Status.
     *
     * @return Response
     */
    public function create()
    {
        return view('services__statuses.create');
    }

    /**
     * Store a newly created Services_Status in storage.
     *
     * @param CreateServices_StatusRequest $request
     *
     * @return Response
     */
    public function store(CreateServices_StatusRequest $request)
    {
        $input = $request->all();

        $servicesStatus = $this->servicesStatusRepository->create($input);

        Flash::success('Services  Status saved successfully.');

        return redirect(route('servicesStatuses.index'));
    }

    /**
     * Display the specified Services_Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $servicesStatus = $this->servicesStatusRepository->find($id);

        if (empty($servicesStatus)) {
            Flash::error('Services  Status not found');

            return redirect(route('servicesStatuses.index'));
        }

        return view('services__statuses.show')->with('servicesStatus', $servicesStatus);
    }

    /**
     * Show the form for editing the specified Services_Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $servicesStatus = $this->servicesStatusRepository->find($id);

        if (empty($servicesStatus)) {
            Flash::error('Services  Status not found');

            return redirect(route('servicesStatuses.index'));
        }

        return view('services__statuses.edit')->with('servicesStatus', $servicesStatus);
    }

    /**
     * Update the specified Services_Status in storage.
     *
     * @param int $id
     * @param UpdateServices_StatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServices_StatusRequest $request)
    {
        $servicesStatus = $this->servicesStatusRepository->find($id);

        if (empty($servicesStatus)) {
            Flash::error('Services  Status not found');

            return redirect(route('servicesStatuses.index'));
        }

        $servicesStatus = $this->servicesStatusRepository->update($request->all(), $id);

        Flash::success('Services  Status updated successfully.');

        return redirect(route('servicesStatuses.index'));
    }

    /**
     * Remove the specified Services_Status from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $servicesStatus = $this->servicesStatusRepository->find($id);

        if (empty($servicesStatus)) {
            Flash::error('Services  Status not found');

            return redirect(route('servicesStatuses.index'));
        }

        $this->servicesStatusRepository->delete($id);

        Flash::success('Services  Status deleted successfully.');

        return redirect(route('servicesStatuses.index'));
    }
}
