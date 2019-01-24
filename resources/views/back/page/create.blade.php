@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Список страниц</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ url('admin/pages') }}">
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Название</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="name"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Заголовок</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="title"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">url</label>
                                <div class="col-sm-10">
                                    <input class="form-control"
                                           type="text"
                                           name="url"
                                    >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Текст страницы</label>
                                <div class="col-sm-10">
                                    <textarea name="htmlpage"></textarea>
                                </div>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-primary">Создать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
