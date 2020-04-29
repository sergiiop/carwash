<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoice_StatusRequest;
use App\Http\Requests\UpdateInvoice_StatusRequest;
use App\Repositories\Invoice_StatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Invoice_StatusController extends AppBaseController
{
    /** @var  Invoice_StatusRepository */
    private $invoiceStatusRepository;

    public function __construct(Invoice_StatusRepository $invoiceStatusRepo)
    {
        $this->invoiceStatusRepository = $invoiceStatusRepo;
    }

    /**
     * Display a listing of the Invoice_Status.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invoiceStatuses = $this->invoiceStatusRepository->paginate(10);

        return view('invoice__statuses.index')
            ->with('invoiceStatuses', $invoiceStatuses);
    }

    /**
     * Show the form for creating a new Invoice_Status.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoice__statuses.create');
    }

    /**
     * Store a newly created Invoice_Status in storage.
     *
     * @param CreateInvoice_StatusRequest $request
     *
     * @return Response
     */
    public function store(CreateInvoice_StatusRequest $request)
    {
        $input = $request->all();

        $invoiceStatus = $this->invoiceStatusRepository->create($input);

        Flash::success('Invoice  Status saved successfully.');

        return redirect(route('invoiceStatuses.index'));
    }

    /**
     * Display the specified Invoice_Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->find($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice  Status not found');

            return redirect(route('invoiceStatuses.index'));
        }

        return view('invoice__statuses.show')->with('invoiceStatus', $invoiceStatus);
    }

    /**
     * Show the form for editing the specified Invoice_Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->find($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice  Status not found');

            return redirect(route('invoiceStatuses.index'));
        }

        return view('invoice__statuses.edit')->with('invoiceStatus', $invoiceStatus);
    }

    /**
     * Update the specified Invoice_Status in storage.
     *
     * @param int $id
     * @param UpdateInvoice_StatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInvoice_StatusRequest $request)
    {
        $invoiceStatus = $this->invoiceStatusRepository->find($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice  Status not found');

            return redirect(route('invoiceStatuses.index'));
        }

        $invoiceStatus = $this->invoiceStatusRepository->update($request->all(), $id);

        Flash::success('Invoice  Status updated successfully.');

        return redirect(route('invoiceStatuses.index'));
    }

    /**
     * Remove the specified Invoice_Status from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoiceStatus = $this->invoiceStatusRepository->find($id);

        if (empty($invoiceStatus)) {
            Flash::error('Invoice  Status not found');

            return redirect(route('invoiceStatuses.index'));
        }

        $this->invoiceStatusRepository->delete($id);

        Flash::success('Invoice  Status deleted successfully.');

        return redirect(route('invoiceStatuses.index'));
    }
}
