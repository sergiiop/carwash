<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecarRequest;
use App\Http\Requests\UpdatecarRequest;
use App\Repositories\carRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\brands;
use App\Models\people;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Flash;
use Response;

class carController extends AppBaseController
{
    /** @var  carRepository */
    private $carRepository;

    public function __construct(carRepository $carRepo)
    {
        $this->carRepository = $carRepo;
    }

    /**
     * Display a listing of the car.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $cars = $this->carRepository->paginate(10);

        return view('cars.index')
            ->with('cars', $cars);
    }

    /**
     * Show the form for creating a new car.
     *
     * @return Response
     */
    public function create()
    {
        $marca = brands::pluck('descripcion','id');
        $personas = people::pluck('Identification','id');
        $datos = ['personas' => $personas,'marca'=>$marca];
        return view('cars.create')->with('datos',$datos);
    }

    /**
     * Store a newly created car in storage.
     *
     * @param CreatecarRequest $request
     *
     * @return Response
     */
    public function store(CreatecarRequest $request)
    {
        $input = $request->all();

        $car = $this->carRepository->create($input);

        Flash::success('Car saved successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Display the specified car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        return view('cars.show')->with('car', $car);
    }

    /**
     * Show the form for editing the specified car.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }
        $bd=brands::pluck('descripcion', 'id');
        $pr=people::pluck('Identification','id');

        $datos = ['car' => $car, 'personas' => $pr, 'marca' => $bd];

        return view('cars.edit')->with('datos', $datos);
    }

    /**
     * Update the specified car in storage.
     *
     * @param int $id
     * @param UpdatecarRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecarRequest $request)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $car = $this->carRepository->update($request->all(), $id);

        Flash::success('Car updated successfully.');

        return redirect(route('cars.index'));
    }

    /**
     * Remove the specified car from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $car = $this->carRepository->find($id);

        if (empty($car)) {
            Flash::error('Car not found');

            return redirect(route('cars.index'));
        }

        $this->carRepository->delete($id);

        Flash::success('Car deleted successfully.');

        return redirect(route('cars.index'));
    }
}
