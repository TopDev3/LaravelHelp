<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionSubmitted; // Asegúrate de crear este Mailable
use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use Livewire\Attributes\On;

class SendQuestionModalComponent extends Component
{
    public $showModal = false;
    public $name = '';
    public $email = '';
    public $subject = '';
    public $question = '';
    public $recaptcha;

	protected $rules
		= [
			'name'      => ['required', 'string', 'max:255'],
			'email'     => ['required', 'email', 'max:255'],
			'subject'   => ['required', 'string', 'max:255'],
			'question'  => ['required', 'string'],
			'recaptcha' => ['required', 'captcha'],
		];

	protected $messages
		= [
			'recaptcha.required' => 'Please verify that you are not a robot.',
        'recaptcha.captcha' => 'Captcha error! try again later or contact site admin.',
    ];

    public function mount()
    {
        // Escucha el evento para abrir el modal
        // Livewire.on('openSendQuestionModal', () => { this.showModal = true; });
    }

    #[On('openSendQuestionModal')]
    public function openModal()
    {
        $this->resetInputFields();
        $this->showModal = true;
        // Dispatch browser event after modal state is updated
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
        $this->recaptcha = null; // Reset recaptcha token
        $this->resetErrorBag();
    }

    public function submit()
    {
        // Obtener el token de reCAPTCHA del request
        $this->recaptcha = request('g-recaptcha-response');
        
        $validatedData = $this->validate();

        try {
            // Aquí puedes enviar el correo electrónico
            // Mail::to('tu-email@ejemplo.com')->send(new QuestionSubmitted($validatedData));
            
            session()->flash('success', 'Your question has been sent successfully!');
            $this->resetInputFields();
            // Opcional: cerrar el modal después del éxito
            // $this->closeModal(); 

        } catch (\Exception $e) {
            session()->flash('error', 'There was an error sending your question. Please try again.');
             // Log::error('Error sending question email: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.send-question-modal-component');
    }
}
