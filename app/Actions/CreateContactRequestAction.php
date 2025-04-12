<?php

namespace App\Actions;

use App\Data\ContactRequestData;
use App\Models\ContactRequest;

class CreateContactRequestAction
{
    public function execute(ContactRequestData $contactRequestData): void
    {

        $contactRequest = $this->storeContactRequest($contactRequestData);

        $this->sendContactRequestEmail($contactRequest);

    }

    private function storeContactRequest(ContactRequestData $contactRequestData): ContactRequest
    {
        return ContactRequest::create([
            'name' => $contactRequestData->name,
            'email' => $contactRequestData->email,
            'subject' => $contactRequestData->subject,
            'question' => $contactRequestData->question,
        ]);

    }

    private function sendContactRequestEmail(ContactRequest $contactRequest): void {}
}
