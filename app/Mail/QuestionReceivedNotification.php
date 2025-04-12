<?php

namespace App\Mail;

use App\Data\ContactRequestData;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuestionReceivedNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(private ContactRequestData $contactRequestData) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Question Received!',
            replyTo: $this->contactRequestData->email,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.question-received',
            with: [
                'contactRequestData' => $this->contactRequestData,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
