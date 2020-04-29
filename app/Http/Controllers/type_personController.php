<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtype_personRequest;
use App\Http\Requests\Updatetype_personRequest;
use App\Repositories\type_personRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class type_personController extends AppBaseController
{
    /** @var  type_personRepository */
    private $typePersonRepository;

    public function __construct(type_personRepository $typePersonRepo)
    {
        $this->typePersonRepository = $typePersonRepo;
    }

    /**
     * Display a listing of the type_person.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $typePeople = $this->typePersonRepository->paginate(10);

        return view('type_people.index')
            ->with('typePeople', $typePeople);
    }

    /**
     * Show the form for creating a new type_person.
     *
     * @return Response
     */
    public function create()
    {
        return view('type_people.create');
    }

    /**
     * Store a newly created type_person in storage.
     *
     * @param Createtype_personRequest $request
     *
     * @return Response
     */
    public function store(Createtype_personRequest $request)
    {
        $input = $request->all();

        $typePerson = $this->typePersonRepository->create($input);

        Flash::success('Type Person saved successfully.');

        return redirect(route('typePeople.index'));
    }

    /**
     * Display the specified type_person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $typePerson = $this->typePersonRepository->find($id);

        if (empty($typePerson)) {
            Flash::error('Type Person not found');

            return redirect(route('typePeople.index'));
        }

        return view('type_people.show')->with('typePerson', $typePerson);
    }

    /**
     * Show the form for editing the specified type_person.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $typePerson = $this->typePersonRepository->find($id);

        if (empty($typePerson)) {
            Flash::error('Type Person not found');

            return redirect(route('typePeople.index'));
        }

        return view('type_people.edit')->with('typePerson', $typePerson);
    }

    /**
     * Update the specified type_person in storage.
     *
     * @param int $id
     * @param Updatetype_personRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetype_personRequest $request)
    {
        $typePerson = $this->typePersonRepository->find($id);

        if (empty($typePerson)) {
            Flash::error('Type Person not found');

            return redirect(route('typePeople.index'));
        }

        $typePerson = $this->typePersonRepository->update($request->all(), $id);

        Flash::success('Type Person updated successfully.');

        return redirect(route('typePeople.index'));
    }

    /**
     * Remove the specified type_person from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $typePerson = $this->typePersonRepository->find($id);

        if (empty($typePerson)) {
            Flash::error('Type Person not found');

            return redirect(route('typePeople.index'));
        }

        $this->typePersonRepository->delete($id);

        Flash::success('Type Person deleted successfully.');

        return redirect(route('typePeople.index'));
    }
}
