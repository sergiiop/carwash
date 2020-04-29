<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatus_PersonRequest;
use App\Http\Requests\UpdateStatus_PersonRequest;
use App\Repositories\Status_PersonRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Status_PersonController extends AppBaseController
{
    /** @var  Status_PersonRepository */
    private $statusPersonRepository;

    public function __construct(Status_PersonRepository $statusPersonRepo)
    {
        $this->statusPersonRepository = $statusPersonRepo;
    }

    /**
     * Display a listing of the Status_Person.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statusPeople = $this->statusPersonRepository->paginate(10);

        return view('status__people.index')
            ->with('statusPeople', $statusPeople);
    }

    /**
     * Show the form for creating a new Status_Person.
     *
     * @return Response
     */
    public function create()
    {
        return view('status__people.create');
    }

    /**
     * Store a newly created Status_Person in storage.
     *
     * @param CreateStatus_PersonRequest $request
     *
     * @return Response
     */
    public function store(CreateStatus_PersonRequest $request)
    {
        $input = $request->all();

        $statusPerson = $this->statusPersonRepository->create($input);

        Flash::success('Status  Person saved successfully.');

        return redirect(route('statusPeople.index'));
    }

    /**
     * Display the specified Status_Person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statusPerson = $this->statusPersonRepository->find($id);

        if (empty($statusPerson)) {
            Flash::error('Status  Person not found');

            return redirect(route('statusPeople.index'));
        }

        return view('status__people.show')->with('statusPerson', $statusPerson);
    }

    /**
     * Show the form for editing the specified Status_Person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statusPerson = $this->statusPersonRepository->find($id);

        if (empty($statusPerson)) {
            Flash::error('Status  Person not found');

            return redirect(route('statusPeople.index'));
        }

        return view('status__people.edit')->with('statusPerson', $statusPerson);
    }

    /**
     * Update the specified Status_Person in storage.
     *
     * @param int $id
     * @param UpdateStatus_PersonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatus_PersonRequest $request)
    {
        $statusPerson = $this->statusPersonRepository->find($id);

        if (empty($statusPerson)) {
            Flash::error('Status  Person not found');

            return redirect(route('statusPeople.index'));
        }

        $statusPerson = $this->statusPersonRepository->update($request->all(), $id);

        Flash::success('Status  Person updated successfully.');

        return redirect(route('statusPeople.index'));
    }

    /**
     * Remove the specified Status_Person from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statusPerson = $this->statusPersonRepository->find($id);

        if (empty($statusPerson)) {
            Flash::error('Status  Person not found');

            return redirect(route('statusPeople.index'));
        }

        $this->statusPersonRepository->delete($id);

        Flash::success('Status  Person deleted successfully.');

        return redirect(route('statusPeople.index'));
    }
}
