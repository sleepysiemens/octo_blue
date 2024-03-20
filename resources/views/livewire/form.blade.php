<div>
    <form action="{{route('submit.form')}}" method="post">
        @csrf
        <div class="row text-white">
            <div class="col-12">
                <p>Как с Вами связаться?</p>
            </div>
            <div class="form-check col-lg col-12 d-flex justify-content-lg-center">
                <input type="radio" class="form-check-input" id="email_radio{{$number}}" wire:model.live="feedback_type" name="feedback_type" value="email">
                <label class="form-check-label ms-2" for="email_radio{{$number}}">Email</label>
            </div>
            <div class="form-check col-lg col-12 d-flex justify-content-lg-center">
                <input type="radio" class="form-check-input" id="phone_radio{{$number}}" wire:model.live="feedback_type" name="feedback_type" value="phone">
                <label class="form-check-label ms-2" for="phone_radio{{$number}}">Телефон</label>
            </div>
            <div class="form-check col-lg col-12 d-flex justify-content-lg-center">
                <input type="radio" class="form-check-input" id="tg_radio{{$number}}" wire:model.live="feedback_type" name="feedback_type" value="tg">
                <label class="form-check-label ms-2" for="tg_radio{{$number}}">Telegram</label>
            </div>
            <div class="form-check col-lg col-12 d-flex justify-content-lg-center">
                <input type="radio" class="form-check-input" id="wa_radio{{$number}}" wire:model.live="feedback_type" name="feedback_type" value="wa">
                <label class="form-check-label ms-2" for="wa_radio{{$number}}">WhatsApp</label>
            </div>
        </div>
        <div class="form-group mt-3">
            @switch($feedback_type)
                @case('email')
                    <input type="email" name="feedback_info" class="form-control bg-white py-2 rounded-pill" aria-describedby="emailHelp" placeholder="Email" required>
                    @break
                @case('phone')
                    <input type="tel" name="feedback_info" class="form-control bg-white py-2 rounded-pill" aria-describedby="emailHelp" placeholder="Телефон" required>
                    @break
                @case('tg')
                    <input type="text" name="feedback_info" class="form-control bg-white py-2 rounded-pill" aria-describedby="emailHelp" placeholder="Ссылка на Telegram или номер телефона" required>
                    @break
                @case('wa')
                    <input type="tel" name="feedback_info" class="form-control bg-white py-2 rounded-pill" aria-describedby="emailHelp" placeholder="Номер телефона" required>
                    @break
            @endswitch
        </div>

        <div class="form-group mt-3">
            <textarea class="form-control bg-white py-2 rounded-4" rows="5" name="comment" placeholder="Комментарий..."></textarea>
        </div>
        <button class="btn btn-primary w-100 rounded-pill mt-4" style="height: 45px">
            Запросить оптовый прайс
        </button>
        <p class="text-white opacity-50 text-center mt-2 mb-0" style="font-size: 12px">Нажимая на кнопку “Отправить”, вы соглашаетесь с Политикой обработки персональных данных</p>
    </form>
</div>
