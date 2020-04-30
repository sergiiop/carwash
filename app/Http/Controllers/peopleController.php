<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepeopleRequest;
use App\Http\Requests\UpdatepeopleRequest;
use App\Repositories\peopleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use App\Models\identification_type;
use Illuminate\Support\Facades\DB;
use Response;

class peopleController extends AppBaseController
{
    /** @var  peopleRepository */
    private $peopleRepository;

    public function __construct(peopleRepository $peopleRepo)
    {
        $this->peopleRepository = $peopleRepo;
    }

    /**
     * Display a listing of the people.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $people = $this->peopleRepository->paginate(10);

        return view('people.index')
            ->with('people', $people);
    }

    /**
     * Show the form for creating a new people.
     *
     * @return Response
     */
    public function create()
    {
        $TipoIdentificacion = identification_type::pluck('description','id');
        $datos = ['tipo'=> $TipoIdentificacion];
        return view('people.create')->with('datos',$datos);
    }

    /**
     * Store a newly created people in storage.
     *
     * @param CreatepeopleRequest $request
     *
     * @return Response
     */
    public function store(CreatepeopleRequest $request)
    {
        $input = $request->all();

        $people = $this->peopleRepository->create($input);

        Flash::success('People saved successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Display the specified people.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $people = $this->peopleRepository->find($id);

        if (empty($people)) {
            Flash::error('People not found');

            return redirect(route('people.index'));
        }

        return view('people.show')->with('people', $people);
    }

    /**
     * Show the form for editing the specified people.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $people = $this->peopleRepository->find($id);

        if (empty($people)) {
            Flash::error('People not found');

            return redirect(route('people.index'));
        }
        $tp=identification_type::pluck('description', 'id');
        $datos = ['people' => $people, 'tipo' => $tp];

        return view('people.edit')->with('datos', $datos);
    }

    /**
     * Update the specified people in storage.
     *
     * @param int $id
     * @param UpdatepeopleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepeopleRequest $request)
    {
        $people = $this->peopleRepository->find($id);

        if (empty($people)) {
            Flash::error('People not found');

            return redirect(route('people.index'));
        }

        $people = $this->peopleRepository->update($request->all(), $id);

        Flash::success('People updated successfully.');

        return redirect(route('people.index'));
    }

    /**
     * Remove the specified people from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $people = $this->peopleRepository->find($id);

        if (empty($people)) {
            Flash::error('People not found');

            return redirect(route('people.index'));
        }

        $this->peopleRepository->delete($id);

        Flash::success('People deleted successfully.');

        return redirect(route('people.index'));
    }
}
