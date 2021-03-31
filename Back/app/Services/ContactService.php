<?php

namespace App\Services;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactService
{
    public function getContactsAll(): Collection
    {
        return Contact::all();
    }

    public function getContactById(int $id): Contact
    {
        return Contact::findOrFail($id);
    }

    public function newContact(array $data): Contact
    {
        $data = [
            'state_id'      => $data['state_id'],
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'address'       => $data['address'],
            'number'        => $data['number'],
            'neighborhood'  => $data['neighborhood'],
            'city'          => $data['city'],
            'cep'           => $data['cep'],
        ];

        return Contact::create($data);
    }

    public function updateContactById(int $id, array $data): Contact
    {
        $data = [
            'state_id'      => $data['state_id'],
            'name'          => $data['name'],
            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'address'       => $data['address'],
            'number'        => $data['number'],
            'neighborhood'  => $data['neighborhood'],
            'city'          => $data['city'],
            'cep'           => $data['cep'],
        ];

        Contact::find($id)->update($data);

        return Contact::find($id);
    }

    public function deleteContactById(int $id): void
    {
        Contact::find($id)->delete();
    }
}
