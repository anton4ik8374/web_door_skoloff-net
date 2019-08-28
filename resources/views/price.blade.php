@extends('layouts.headerNew')

@section('content')
    <style>
        .my-style{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: start;
        }
        .best-price{
            margin: 10px !important;
            padding: 5px;
            box-sizing: content-box;
        }
    </style>
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix my-style">
                <div class="fancy-title title-dotted-border title-center">
                    <h3>Цены</h3>
                </div>
                <div class="row pricing pricing-5 bottommargin clearfix my-style">
                    @foreach ($data['price'] as $value)
                        <div class="pricing-box pricing-minimal best-price">
                            <div class="pricing-title">
                                <h3>skoloff-net</h3>
                                <span>{{ $value->name}}</span>
                            </div>
                            <div class="pricing-price">
                                <span class="price-unit">Р</span>{{ $value->price}}
                            </div>
                            <div class="pricing-action">

                                <a href="tel:+7(996)7843542" class="btn btn-danger btn-block bgcolor border-color">Позвонить</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
