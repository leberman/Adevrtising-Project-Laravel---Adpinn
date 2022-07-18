<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1\Profile;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\invoiceCollection;
use App\Http\Resources\User\invoiceResource;
use App\Invoice;
use App\User;
use function App\Http\Controllers\Api\Profile\auth;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = User::find(auth()->user()->id)->invoices()->with('payments')->with('expert')->paginate(5);
        return new invoiceCollection($invoices);
    }

    public function show($id)
    {
        $invoice = Invoice::where('user_id', auth()->user()->id)->where('id', $id)->with('payments')->with('expert')->first();
        $this->authorize('view', $invoice);
        return new invoiceResource($invoice);
    }
}
