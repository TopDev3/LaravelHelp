<x-mail::message>
# New Question Received

A new question has been submitted through the contact form.

**From:** {{ $contactRequestData->name }} ({{ $contactRequestData->email }})  
**Subject:** {{ $contactRequestData->subject }}

**Question:**
{{ $contactRequestData->question }}

<x-mail::button :url="config('app.url')">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
