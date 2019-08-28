@extends('layouts.headerNew')

@section('content')
    <section id="content">

        <div class="content-wrap">
            <div class="heading-block center nobottomborder">
                <h3>Работы</h3>
                <span>Выполняем работы любой сложности</span>
            </div>
            <div class="container clearfix">
                <div class="col_full clearfix">
                    <div class="masonry-thumbs grid-4" data-big="4" data-lightbox="gallery">
                        @foreach ($data['gallery'] as $file)
                            <a href="{{$file->file}}" data-lightbox="gallery-item"><img
                                        class="image_fade" src="{{$file->mini}}"
                                        alt="Gallery Thumb 1"></a>
                        @endForeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection