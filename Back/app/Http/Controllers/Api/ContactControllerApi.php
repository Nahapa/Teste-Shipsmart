<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Resources\ContactResource;
use App\Services\ContactService;

class ContactControllerApi extends Controller
{
    private $contactService;

    public function __construct()
    {
        $this->contactService = new ContactService();
    }

    public function index()
    {
        return ContactResource::collection($this->contactService->getContactsAll());
    }

    public function show($id)
    {
        return new ContactResource($this->contactService->getContactById($id));
    }

    public function store(ContactRequest $request)
    {
        return new ContactResource($this->contactService->newContact($request->all()));
    }

    public function update(ContactRequest $request, $id)
    {
        return new ContactResource($this->contactService->updateContactById($id, $request->all()));
    }

    public function destroy($id)
    {
        return $this->contactService->deleteContactById($id);
    }
}
