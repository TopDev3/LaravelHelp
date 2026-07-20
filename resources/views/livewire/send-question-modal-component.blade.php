<div> {{-- Root element for Livewire --}}
    @if ($showModal)
    <div wire:ignore.self class="modal fade show" style="display: block;" id="modal-send-question-livewire" tabindex="-1" aria-labelledby="modalHelpMeNowLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-card shadow-1" style="background-color: #f8f9fa;">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5 text-secondary fw-bold" id="modalHelpMeNowLabel">Send me a question</h1>
                    <button 
                            type="button" 
                            class="btn-close btn-close-sm" 
                            wire:click="closeModal" 
                            aria-label="Close"></button>
                </div>
    
                <div class="modal-body py-4">
                    <form wire:submit.prevent="submit" id="questionFormLivewire">
                        {{-- Honeypot Fields --}}
                       @honeypot
                        
                        {{-- Hidden input bound to Livewire recaptcha property --}}
                        <input type="hidden" wire:model="recaptcha" id="recaptcha_token_input">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label text-secondary">Your Name</label>
                                <input wire:model="name" type="text" class="form-control px-3 py-2 bg-white @error('name') is-invalid @enderror" id="name">
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            
                            <div class="col-md-6">
                                <label for="email" class="form-label text-secondary">Email Address</label>
                                <input wire:model="email" type="email" class="form-control px-3 py-2 bg-white @error('email') is-invalid @enderror" id="email">
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label text-secondary">Subject</label>
                            <input wire:model="subject" type="text" class="form-control px-3 py-2 bg-white @error('subject') is-invalid @enderror" id="subject">
                            @error('subject') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="question" class="form-label text-secondary">Your Question</label>
                            <textarea wire:model="question" class="form-control px-3 py-2 bg-white @error('question') is-invalid @enderror" id="question" rows="4"></textarea>
                            @error('question') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3" wire:ignore>
                            <div id="recaptcha-container"></div> {{-- Container for explicit rendering --}}
                        </div>
                        @error('recaptcha') <div class="text-danger">{{ $message }}</div> @enderror
                        
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                         @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
    
                    </form>
                </div>
    
                <div class="modal-footer border-top-0">
                    <button type="button" class="btn btn-outline btn-sm" wire:click="closeModal">Close</button> 
                    <button type="submit" form="questionFormLivewire" class="btn btn-main btn-sm d-flex align-items-center gap-2" wire:loading.attr="disabled" wire:target="submit">
                        <i wire:loading.remove wire:target="submit" class="ri-send-plane-fill"></i>
                        Send Question
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show" style="display: block;" wire:click="closeModal"></div>
    @endif
</div>
