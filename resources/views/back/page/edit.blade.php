@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список страниц</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ url('admin/pages/'.$data->id) }}" >
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Название</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="name"
                                           value="{{ $data->name }}"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Заголовок</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="title"
                                           value="{{ $data->title }}"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">url</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="url"
                                           value="{{ $data->url }}"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Текст страницы</label>
                                <div class="col-sm-10">
                                    <textarea name="htmlpage">
                                        {!! $data->htmlpage !!}
                                    </textarea>
                                </div>
                            </div>
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
