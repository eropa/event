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
                                        <td> <a href="{{ url('admin/pages/'.$data->id.'/edit') }}">
                                            {{ $data->name }} </a></td>
                                        <td>{{ $data->url }}</td>
                                        <td>
                                            <form action=" {{ url('admin/pages/'.$data->id) }} " method="post">
                                                <button type="submit" class="btn btn-primary">Удалить</button>
                                                @method('DELETE')
                                                @csrf
                                            </form>

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
