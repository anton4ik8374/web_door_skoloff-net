@extends('layouts.headerNew')

@section('content')

    <!-- Content
    ============================================= -->


    <section id="content">

        <div class="content-wrap">
            <div class="heading-block center nobottomborder">
                <h3>Преимущества</h3>
                <span>Почему нам доверяют</span>
            </div>
            <div class="container clearfix">

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line2-speedometer i-alt"></i></a>
                        </div>
                        <h3>БЫСТРО</h3>
                        <p>Мы ценим ваше время. И поэтому Выполняем работы в указанные сроки</p>
                    </div>
                </div>

                <div class="col_one_third">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-line2-diamond i-alt"></i></a>
                        </div>
                        <h3>КАЧЕСТВЕННО</h3>
                        <p>Качество Автостекла.И производимых работ Мы даём гарантию..</p>
                    </div>
                </div>

                <div class="col_one_third col_last">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-money i-alt"></i></a>
                        </div>
                        <h3>ДОСТУПНО</h3>
                        <p>Доступные цены Мы не завышаем планку Все материлы сертифицированы</p>
                    </div>
                </div>

                <div class="clear"></div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-people-carry i-alt"></i></a>
                        </div>
                        <h3>ПОСТАВЩИКИ</h3>
                        <p>Только официальные производители Материалы высшего качества На любые авто.</p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-award i-alt"></i></a>
                        </div>
                        <h3>Гарантия</h3>
                        <p>Мы уверены в качестве нашей работы.Поэтому предоставляем гарантию.</p>
                    </div>
                </div>

                <div class="col_one_third nobottommargin col_last">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-sun1 i-alt"></i></a>
                        </div>
                        <h3>Оборудование</h3>
                        <p>В своей работе мы применяем современное оборудования и стандарты.</p>
                    </div>
                </div>

                <div class="clear"></div><div class="line"></div>
                <div class="heading-block center nobottomborder">
                    <h3>Партнеры</h3>
                    <span>Надежные компании с мировым именем</span>
                </div>
                <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="3000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
                    @foreach ($data['sponsor'] as $spons)
                         <a href="#"><img src="{{$spons->images}}" alt="{{ $spons->name}}"></a>
                    @endforeach
                </div>

            </div>
            <div class="heading-block center nobottomborder">
                <h3>Работы</h3>
                <span>Выполняем работы любой сложности</span>
            </div>
            <div class="container clearfix">
                <div class="col_full clearfix">
                    <div class="masonry-thumbs grid-4" data-big="4" data-lightbox="gallery">
                        @foreach ($data['gallery'] as $file)
                            <a href="{{$file->file}}" data-lightbox="gallery-item"><img class="image_fade" src="{{$file->mini}}" alt="Gallery Thumb 1"></a>
                        @endForeach
                    </div>
                </div>
                <a href="{{route('ourwork')}}" class="button button-desc button-border button-rounded center"><div>Ещё работы</div><span>Для просмотра полного списка работ</span></a>
            </div>

        </div>

    </section><!-- #content end -->
@endsection
