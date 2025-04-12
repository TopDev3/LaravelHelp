<?php

namespace App\Livewire;

use App\Actions\CreateContactRequestAction;
use App\Data\ContactRequestData;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Honeypot\Http\Livewire\Concerns\HoneypotData;
use Spatie\Honeypot\Http\Livewire\Concerns\UsesSpamProtection;
use Throwable;

class SendQuestionModalComponent extends Component
{
    use UsesSpamProtection;

    public HoneypotData $extraFields;

    public $showModal = false;

    public $name = '';

    public $email = '';

    public $subject = '';

    public $question = '';

    public $recaptcha;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'question' => ['required', 'string'],
            'recaptcha' => ['required', 'captcha'],
        ];
    }

    protected $messages = [
        'recaptcha.required' => 'Please verify that you are not a robot.',
        'recaptcha.captcha' => 'Captcha error! try again later or contact site admin.',
    ];

    public function mount()
    {
        $this->extraFields = new HoneypotData;
        // Escucha el evento para abrir el modal
        // Livewire.on('openSendQuestionModal', () => { this.showModal = true; });
    }

    #[On('openSendQuestionModal')]
    public function openModal()
    {
        $this->resetInputFields();
        $this->showModal = true;
        $this->dispatch('modalOpened');
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->subject = '';
        $this->question = '';
        $this->recaptcha = null;
        $this->resetErrorBag();
    }

    public function submit()
    {
        $this->protectAgainstSpam();

        $validatedData = $this->validate();

        try {
            unset($validatedData['recaptcha']);

            $contactRequestData = ContactRequestData::fromArray([
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'question' => $this->question,
            ]);

            app(CreateContactRequestAction::class)->execute($contactRequestData);

            session()->flash('success', 'Your question has been sent successfully!');
            $this->resetInputFields();

        } catch (Throwable $e) {
            Log::error('Error saving contact request or sending email: '.$e->getMessage());
            session()->flash('error', 'There was an error sending your question. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.send-question-modal-component');
    }
}
