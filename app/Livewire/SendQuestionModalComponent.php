<?php

namespace App\Livewire;

use App\Actions\SendContactRequestAction;
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'question' => 'required|string',
            'recaptcha' => 'required|captcha',
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

    // Listener to close modal from JS
    #[On('closeSendQuestionModalEvent')]
    public function closeModal()
    {
        Log::debug('closeSendQuestionModalEvent received, closing modal.');
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
        //  $this->recaptcha = request('g-recaptcha-response'); // Re-added temporarily for testing if needed

        $validatedData = $this->validate();

        try {
            unset($validatedData['recaptcha']);

            $contactRequestData = ContactRequestData::fromArray($validatedData);
            app(SendContactRequestAction::class)->execute($contactRequestData);

            // Dispatch browser event for JS to handle success message
            $this->dispatch('questionSentSuccessfully', message: 'We\'ve received your question, we will contact you soon.');

            $this->resetInputFields();
            // Removed automatic modal close: $this->closeModal();

        } catch (Throwable $e) { // Changed to Throwable
            Log::error('Error sending M365 email: '.$e->getMessage());
            // Dispatch browser event for JS to handle error message (optional)
            $this->dispatch('questionSendFailed', message: 'There was an error sending your question. Please try again.');
            // Keep session flash as fallback
            session()->flash('error', 'There was an error sending your question. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.send-question-modal-component');
    }
}
