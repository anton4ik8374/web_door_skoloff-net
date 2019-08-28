@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Форма загрузки файлов
                    <form id="create">
                        @csrf
                       <input type="file" name="file" id="file">
                        <button type="button" id="download" class="btn btn-primary">Загрузить</button>
                        <div id="result" class="result">Файл загруен</div>
                        <i class="preloader-img none" id="preloader"></i>
                    </form>
                </div>
                <div class="card-body">
                    @if (isset($fotos))
                        @foreach($fotos as $foto)
                            <div class="foto-block">
                                <span data-id="{{$foto->id}}" class="btn-delete" _token="{{ csrf_token() }}" >×</span>
                                <img class="foto" src="{{$foto->mini}}">
                            </div>
                        @endforeach
                    @else
                        Нет доступных фотографий!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
