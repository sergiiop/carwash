<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatefacturaRequest;
use App\Http\Requests\UpdatefacturaRequest;
use App\Repositories\facturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class facturaController extends AppBaseController
{
    /** @var  facturaRepository */
    private $facturaRepository;

    public function __construct(facturaRepository $facturaRepo)
    {
        $this->facturaRepository = $facturaRepo;
    }

    /**
     * Display a listing of the factura.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $facturas = $this->facturaRepository->paginate(10);

        return view('facturas.index')
            ->with('facturas', $facturas);
    }

    /**
     * Show the form for creating a new factura.
     *
     * @return Response
     */
    public function create()
    {
        return view('facturas.create');
    }

    /**
     * Store a newly created factura in storage.
     *
     * @param CreatefacturaRequest $request
     *
     * @return Response
     */
    public function store(CreatefacturaRequest $request)
    {
        $input = $request->all();

        $factura = $this->facturaRepository->create($input);

        Flash::success('Factura saved successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Display the specified factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            Flash::error('Factura not found');

            return redirect(route('facturas.index'));
        }

        return view('facturas.show')->with('factura', $factura);
    }

    /**
     * Show the form for editing the specified factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            Flash::error('Factura not found');

            return redirect(route('facturas.index'));
        }

        return view('facturas.edit')->with('factura', $factura);
    }

    /**
     * Update the specified factura in storage.
     *
     * @param int $id
     * @param UpdatefacturaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatefacturaRequest $request)
    {
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            Flash::error('Factura not found');

            return redirect(route('facturas.index'));
        }

        $factura = $this->facturaRepository->update($request->all(), $id);

        Flash::success('Factura updated successfully.');

        return redirect(route('facturas.index'));
    }

    /**
     * Remove the specified factura from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $factura = $this->facturaRepository->find($id);

        if (empty($factura)) {
            Flash::error('Factura not found');

            return redirect(route('facturas.index'));
        }

        $this->facturaRepository->delete($id);

        Flash::success('Factura deleted successfully.');

        return redirect(route('facturas.index'));
    }
}
