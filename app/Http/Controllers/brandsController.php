<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebrandsRequest;
use App\Http\Requests\UpdatebrandsRequest;
use App\Repositories\brandsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class brandsController extends AppBaseController
{
    /** @var  brandsRepository */
    private $brandsRepository;

    public function __construct(brandsRepository $brandsRepo)
    {
        $this->brandsRepository = $brandsRepo;
    }

    /**
     * Display a listing of the brands.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $brands = $this->brandsRepository->paginate(10);

        return view('brands.index')
            ->with('brands', $brands);
    }

    /**
     * Show the form for creating a new brands.
     *
     * @return Response
     */
    public function create()
    {
        return view('brands.create');
    }

    /**
     * Store a newly created brands in storage.
     *
     * @param CreatebrandsRequest $request
     *
     * @return Response
     */
    public function store(CreatebrandsRequest $request)
    {
        $input = $request->all();

        $brands = $this->brandsRepository->create($input);

        Flash::success('Brands saved successfully.');

        return redirect(route('brands.index'));
    }

    /**
     * Display the specified brands.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $brands = $this->brandsRepository->find($id);

        if (empty($brands)) {
            Flash::error('Brands not found');

            return redirect(route('brands.index'));
        }

        return view('brands.show')->with('brands', $brands);
    }

    /**
     * Show the form for editing the specified brands.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $brands = $this->brandsRepository->find($id);

        if (empty($brands)) {
            Flash::error('Brands not found');

            return redirect(route('brands.index'));
        }

        return view('brands.edit')->with('brands', $brands);
    }

    /**
     * Update the specified brands in storage.
     *
     * @param int $id
     * @param UpdatebrandsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebrandsRequest $request)
    {
        $brands = $this->brandsRepository->find($id);

        if (empty($brands)) {
            Flash::error('Brands not found');

            return redirect(route('brands.index'));
        }

        $brands = $this->brandsRepository->update($request->all(), $id);

        Flash::success('Brands updated successfully.');

        return redirect(route('brands.index'));
    }

    /**
     * Remove the specified brands from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $brands = $this->brandsRepository->find($id);

        if (empty($brands)) {
            Flash::error('Brands not found');

            return redirect(route('brands.index'));
        }

        $this->brandsRepository->delete($id);

        Flash::success('Brands deleted successfully.');

        return redirect(route('brands.index'));
    }
}
