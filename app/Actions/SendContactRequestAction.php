<?php

namespace App\Actions;

use App\Data\ContactRequestData;
use App\Mail\QuestionReceivedNotification;
use App\Models\ContactRequest;
use Illuminate\Support\Facades\Mail;

class SendContactRequestAction
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

    private function sendContactRequestEmail(ContactRequest $contactRequest): void
    {

        Mail::to(config('config.support_email'))
            ->send(new QuestionReceivedNotification($contactRequest));
    }
}
