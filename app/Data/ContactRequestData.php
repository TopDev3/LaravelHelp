<?php

namespace App\Data;

class ContactRequestData
{
    public function __construct(

        public string $name = '',
        public string $email = '',
        public string $subject = '',
        public string $question = '',

    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'] ?? '',
            email: $data['email'] ?? '',
            subject: $data['subject'] ?? '',
            question: $data['question'] ?? '',
        );
    }
}
