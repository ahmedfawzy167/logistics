<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Contact;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Models\ContactDetail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Resources\Contacts\ContactResource;
use App\Http\Resources\Contacts\ContactDetailResource;

class ContactController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactDetails = ContactDetail::all();
        return $this->success(ContactDetailResource::collection($contactDetails));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        return $this->created(new ContactResource($contact), __('admin.contact'));
    }
}
