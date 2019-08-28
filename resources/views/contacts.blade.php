@extends('layouts.headerNew')

@section('content')
    <style>
        .map_content .map_content-title {
            display: block;
            font-size: 18px;
            color: #000;
            line-height: 1.5;
            margin-bottom: 5px;
        }
        .map_content .map_content-address, .map_content .map_content-tel {
            display: block;
            font-size: 12px;
            color: #888;
            line-height: 1.33;
            padding-bottom: 5px;
            padding-right: 10px;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

    </style>
    <section id="content">
        <div class="content-wrap">
            <section class="contacts-block">
                <h1 class="contacts-header">Контакты</h1>
                <div class="contacts-info">
                    <div class="contacts-list border-skolof">
                        <i class="icon-phone3"></i>
                        <p class="contact-content"><a href="tel:+79967843542">+7(996)784-35-42</a></p>
                    </div>
                    <div class="contacts-list border-skolof">
                        <i class="icon-sitemap"></i>
                        <p class="contact-content"><a href="http://skoloff-net.ru">skoloff-net.ru</a></p>
                    </div>
                    <div class="contacts-list border-skolof">
                        <i class="icon-time"></i>
                        <p class="block-job">
                            <?php if(date('H')+3 < '22' && date('H') >= '09'):?>
                            <span class="open-time">Открыто: Закрывается в 22:00</span>
                            <?php else:?>
                            <span class="closed-time <?= date('H');?>">Закрыто: Открывается в 09:00</span>
                            <?php endif;?>
                        </p>
                        <ul class="job-time">
                            <li class="time">Пн с 09:00 до 22:00</li>
                            <li class="time">Вт с 09:00 до 22:00</li>
                            <li class="time">Ср с 09:00 до 22:00</li>
                            <li class="time">Чт с 09:00 до 22:00</li>
                            <li class="time">Пт с 09:00 до 22:00</li>
                            <li class="time">Сб с 09:00 до 22:00</li>
                            <li class="time">Вс с 09:00 до 22:00</li>
                        </ul>
                    </div>
                    <div class="contacts-list">
                        <i class="icon-map-marker1"></i>
                        <p class="contact-content">Площадь Александра Невского – 1 <br>улица Моисеенко, 39АЕ</p>
                    </div>
                </div>
            </section>
            <section class="collage">
                <div id="map" style="width: 100%; height: 400px"></div>
            </section>
        </div>
    </section>
@endsection
