<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createdetalle_facturaRequest;
use App\Http\Requests\Updatedetalle_facturaRequest;
use App\Repositories\detalle_facturaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class detalle_facturaController extends AppBaseController
{
    /** @var  detalle_facturaRepository */
    private $detalleFacturaRepository;

    public function __construct(detalle_facturaRepository $detalleFacturaRepo)
    {
        $this->detalleFacturaRepository = $detalleFacturaRepo;
    }

    /**
     * Display a listing of the detalle_factura.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $detalleFacturas = $this->detalleFacturaRepository->paginate(10);

        return view('detalle_facturas.index')
            ->with('detalleFacturas', $detalleFacturas);
    }

    /**
     * Show the form for creating a new detalle_factura.
     *
     * @return Response
     */
    public function create()
    {
        return view('detalle_facturas.create');
    }

    /**
     * Store a newly created detalle_factura in storage.
     *
     * @param Createdetalle_facturaRequest $request
     *
     * @return Response
     */
    public function store(Createdetalle_facturaRequest $request)
    {
        $input = $request->all();

        $detalleFactura = $this->detalleFacturaRepository->create($input);

        Flash::success('Detalle Factura saved successfully.');

        return redirect(route('detalleFacturas.index'));
    }

    /**
     * Display the specified detalle_factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        return view('detalle_facturas.show')->with('detalleFactura', $detalleFactura);
    }

    /**
     * Show the form for editing the specified detalle_factura.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        return view('detalle_facturas.edit')->with('detalleFactura', $detalleFactura);
    }

    /**
     * Update the specified detalle_factura in storage.
     *
     * @param int $id
     * @param Updatedetalle_facturaRequest $request
     *
     * @return Response
     */
    public function update($id, Updatedetalle_facturaRequest $request)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        $detalleFactura = $this->detalleFacturaRepository->update($request->all(), $id);

        Flash::success('Detalle Factura updated successfully.');

        return redirect(route('detalleFacturas.index'));
    }

    /**
     * Remove the specified detalle_factura from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $detalleFactura = $this->detalleFacturaRepository->find($id);

        if (empty($detalleFactura)) {
            Flash::error('Detalle Factura not found');

            return redirect(route('detalleFacturas.index'));
        }

        $this->detalleFacturaRepository->delete($id);

        Flash::success('Detalle Factura deleted successfully.');

        return redirect(route('detalleFacturas.index'));
    }
}
