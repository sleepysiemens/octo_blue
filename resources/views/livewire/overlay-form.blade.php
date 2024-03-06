<div>
    <button wire:click.live="display_" class="btn btn-primary rounded-pill px-3 mb-lg-0">
            <span class="d-flex align-items-center">
                <i class="bi-chat-text-fill me-2"></i>
                <span class="small">Отправить заявку</span>
            </span>
    </button>

    <div class="position-fixed vh-100 vw-100 {{$display}}" style="background-color: rgba(0,0,0,.5); z-index: 10000; top: 0; left: 0">
        <div class="container m-auto">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-11 border rounded-5 p-4 bg-gradient-primary-to-secondary position-relative overflow-hidden" style="background-color: rgba(0,0,0,.1)">
                    <button class="position-absolute btn py-3 px-4 fs-4 text-white" style="top: -5px; right: -5px" wire:click.live="display_">
                        <i class="fas fa-times"></i>
                    </button>
                    <h2 class="text-white display-1 lh-1 fs-1 fw-bold">
                        Оставьте заявку
                    </h2>
                    <p class="text-white mt-0 opacity-75">Чтобы узнать актуальную цену. Мы с Вами свяжемся.</p>
                    <livewire:form :number="2" />
                </div>
            </div>
        </div>
    </div>
</div>
