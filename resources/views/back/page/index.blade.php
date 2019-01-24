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

                        <a href="{{ url('admin/pages/create') }}">Создать</a>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Название</th>
                                    <th scope="col">ЧПУ(url)</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <th scope="row">{{ $data->id }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->url }}</td>
                                        <td>
                                            <a href="{{ url('admin/pages/'.$data->id.'/edit') }}">
                                                Редактировать
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
