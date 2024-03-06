<section id="features" class="pb-0 pb-lg-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class=" px-lg-5">
                    <div class="row gx-5">
                        @php
                        $cons=
                        [
                            [
                               'title'=>'Многоцелевая смазка',
                               'subtitle'=>'Высокая адгезия к поверхностям увеличивает срок службы смазки и снижает время на профилактическое обслуживание.',
                            ],
                            [
                               'title'=>'Высокие нагрузки',
                               'subtitle'=>'Высокая стойкость к нагрузкам благодаря отличной природной стойкости к выдавливанию и противоизносным свойствам.',
                            ],
                            [
                               'title'=>'Водостойкая',
                               'subtitle'=>'Экстраординарная стойкость к вымыванию водой, даже при работе в морской воде не наблюдается значительной потери консистенции.',
                            ],
                            [
                               'title'=>'Высокие температуры',
                               'subtitle'=>'Превосходная термическая стабильность. Смазка восстанавливает оригинальную текстуру после охлаждения до температуры окружающей среды.',
                            ],
                            [
                               'title'=>'Антикоррозийные свойства',
                               'subtitle'=>'Отличные антиокислительные и антикоррозийные свойства благодаря природе сульфоната кальция и специальным присадкам, даже при работе в морской воде.',
                            ],
                            [
                               'title'=>'Не содержит вредных компонентов',
                               'subtitle'=>'Не содержит свинца или других тяжелых металлов, наносящих вред здоровью человека или окружающей среде.',
                            ]
                        ];
                        @endphp
                        @foreach($cons as $con)
                            <div class="col-lg-6 col-12 mb-lg-5 mb-3">
                                <!-- Feature item-->
                                <div class="text-center">
                                    <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt text-start">{{$con['title']}}</h3>
                                    <p class="text-muted text-start mb-0">{{$con['subtitle']}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <div class="circle_ bg-gradient-primary-to-secondary rounded-circle position-absolute">
                    </div>
                    <svg class="shape-1 d-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                    ><svg class="shape-2 d-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>
                    <div class="device-wrapper m-0 promo" style="height: 600px;">
                        <div class="device h-100 d-flex">
                            <img class="w-100 m-auto object-fit-cover" style="filter: drop-shadow(5px 4px 15px rgba(0,0,0,.25));" src="{{asset('img/1L.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
