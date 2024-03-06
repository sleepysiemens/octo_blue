<section class="bg-light d-none d-lg-block">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12">
                <h2 class="display-4 lh-1 mb-4">Характеристики</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card border-0 shadow rounded-5">
                        <div class="card-body p-4">
                            <div class="row pb-3">
                                <h4 class="fw-bold fs-5 col-4 text-center">
                                    Смазка водостойкая
                                </h4>
                                <h4 class="fw-bold fs-5 col-3 text-center">
                                    Стандарт
                                </h4>
                                <h4 class="fw-bold fs-5 col-2 text-center">
                                    Ед. измерения
                                </h4>
                                <h4 class="fw-bold fs-5 col-3 text-center">
                                    Значение
                                </h4>
                            </div>
                            @php
                                $tables=
                                [
                                    ['title'=>'Загуститель','standard'=>'-', 'unit'=>'-','value'=>'Комплекс сульфоната кальция'],
                                    ['title'=>'Класс консистенции','standard'=>'NLGI-2, EP-2, DIN 51502-KP23R40', 'unit'=>'-','value'=>'2'],
                                    ['title'=>'Цвет','standard'=>'Визуально', 'unit'=>'-','value'=>'Синий'],
                                    ['title'=>'Внешний вид','standard'=>'Визуально', 'unit'=>'-','value'=>'Гладкая'],
                                    ['title'=>'Диапозон рабочих температур','standard'=>'-', 'unit'=>'°C','value'=>'-30 до 350'],
                                    ['title'=>'Пенетрация при 25 °C','standard'=>'ASTM D 217/ DIN 51818', 'unit'=>'0.1 мм','value'=>'244'],
                                    ['title'=>'Тест на ЧШМ, нагрузка сваривания','standard'=>'ASTM D2596', 'unit'=>'кгс','value'=>'5300'],
                                    ['title'=>'Эффективеая вязкость при 0 °C','standard'=>'ASTM D 455/DIN 51562 - 1/ISO 3104/ IP71', 'unit'=>'мм²/с','value'=>'1440'],
                                    ['title'=>'Коллоидная стабильность','standard'=>'-', 'unit'=>'-','value'=>'5,8'],
                                    ['title'=>'Щелочное число','standard'=>'-', 'unit'=>'-','value'=>'11'],
                                ];
                            @endphp
                            @foreach($tables as $table)
                                <div class="row border-top border-2 pt-2">
                                    <p class="col-4 text-center">{{$table['title']}}</p>
                                    <p class="col-3 text-center">{{$table['standard']}}</p>
                                    <p class="col-2 text-center">{{$table['unit']}}</p>
                                    <p class="col-3 text-center">{{$table['value']}}</p>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
