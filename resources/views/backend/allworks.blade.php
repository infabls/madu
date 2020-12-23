@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            Все работы
        </x-slot>

        <x-slot name="body">
                     <div class="panel-body">
                     @if (count($works) > 0)
                      <table class="table table-striped task-table">
                        <!-- Заголовок таблицы -->
                        <thead>
                          <th>Название</th>
                          <th>Цена</th>
                          <th>Статус</th>
                          <th>Фото</th>
                          <th>Действия</th>
                        </thead>
                        <!-- Тело таблицы -->
                        <tbody>
                          @foreach ($works as $work)
                            <tr>
                              <!-- Имя клиента -->
                              <td class="table-text">
                                <div><a target="_blank" href="/works/{{$work->id}}">{{ $work->name }}</a></div>
                              </td> 
                              <td class="table-text">
                                <div><p>{{ $work->price }}</p></div>
                              </td> 
                               <td class="table-text">
                                <div>{{ $work->status }}</div>
                              </td> 
                              <td class="table-text">
                                  <img src="{{$work->photo}}" alt="{{$work->name}}" width="100px" height="100px">
                              </td> 
                              <!-- действия с заявками -->
                              <td class="table-text">
                                    <a href="{{ url('editsalon/'.$work->id) }}">
                                    <button type="submit" class="btn btn-danger">
                                      <i class="fa fa-pen"></i> Изменить
                                    </button>
                                    </a>
                              </td> 
                            </tr>
                          @endforeach
                          @else
                          <p>На сайте нет работ. Хотите добавить?</p>
                          @endif
                        </tbody>
                      </table>
                {!! $works->render() !!}
                    </div>
                    </x-slot>
    </x-backend.card>
@endsection
