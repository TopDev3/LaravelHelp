<div {{ $attributes->class(['modal fade']) }} id="modal-schedule-free-consultation" tabindex="-1" aria-labelledby="modalScheduleLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-card shadow-1" style="background-color: #f8f9fa;">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title fs-5 text-secondary fw-bold" id="modalScheduleLabel">Schedule Free Consultation</h1>
                <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-4 text-secondary">
                <p>Pick a time on my booking page to schedule your free 60-minute consultation — every booking automatically includes a Google Meet link.</p>
                <div class="text-center mt-3">
                    <a href="{{ config('config.booking_url') }}" target="_blank" rel="noopener" class="btn btn-main d-inline-flex align-items-center gap-2">
                        <i class="ri-calendar-schedule-fill"></i> Open Booking Page
                    </a>
                </div>
                
                <p class="mt-4 text-muted fst-italic">
                    <small><strong>Note:</strong> I will try to respond to your request in the shortest possible time.</small>
                </p>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-outline btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>