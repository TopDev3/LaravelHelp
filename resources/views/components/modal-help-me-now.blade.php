<div {{ $attributes->class(['modal fade']) }} id="modal-help-me-now" tabindex="-1" aria-labelledby="modalHelpMeNowLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-card shadow-1" style="background-color: #f8f9fa;">
            <div class="modal-header border-bottom-0">
                <h1 class="modal-title fs-5 text-secondary fw-bold" id="modalHelpMeNowLabel">
                    <i class="ri-flashlight-fill text-primary me-2"></i> Urgent Help Session
                </h1>
                <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body py-4 text-secondary">
                <p class="mb-3">
                    Need faster, prioritized assistance with your Laravel application?
                </p>
                <p class="mb-3">
                    The "Help Me Now" service provides an **urgent 1-hour consultation** to tackle your immediate challenges.
                </p>
                <p class="mb-4">
                    This dedicated session is available for **$50 USD**. 
                </p>
                <p class="text-center">
                    Click below to schedule your priority session immediately:
                </p>
                <div class="text-center mt-4">
                     <a href="#" 
                        onclick="Calendly.initPopupWidget({url: 'https://calendly.com/laravel-help/help-me-now'}); return false;" 
                        class="btn btn-main d-inline-flex align-items-center gap-2">
                         <i class="ri-calendar-schedule-fill"></i>
                         Schedule Urgent Session ($50)
                     </a>
                </div>
            </div>

             <div class="modal-footer border-top-0">
                 <button type="button" class="btn btn-outline btn-sm" data-bs-dismiss="modal">Close</button> 
             </div>
        </div>
    </div>
</div>