<div {{ $attributes->class(['modal fade']) }} id="modal-send-question" tabindex="-1" aria-labelledby="modalHelpMeNowLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalHelpMeNowLabel">Send us a question</h1>
                <button
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        type="button"
                        class="btn-close btn-close-sm"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="questionForm" class="needs-validation" novalidate>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <div class="invalid-feedback">
                                Please provide your name.
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <div class="invalid-feedback">
                                Please provide a valid email address.
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                        <div class="invalid-feedback">
                            Please provide a subject.
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="question" class="form-label">Your Question</label>
                        <textarea class="form-control" id="question" name="question" rows="4" required></textarea>
                        <div class="invalid-feedback">
                            Please provide your question.
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="questionForm" class="btn btn-primary btn-sm d-flex align-items-center gap-2">
                    <i class="ri-send-plane-fill"></i>
                    Send Question
                </button>
            </div>
        </div>
    </div>
</div>