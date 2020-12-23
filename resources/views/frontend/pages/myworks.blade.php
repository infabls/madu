@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Данные о ваших работах. Всего работ - {{$works->total()}}.  <a href="/addwork">Добавить работу</a>
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

                              <!-- действия с заявками -->
                              <td class="table-text">
                                  <img src="{{$work->photo}}" alt="{{$work->name}}" width="100px" height="100px">
                              </td> 
                            </tr>
                          @endforeach
                          @else
                          <p>У вас нет работ. Хотите добавить?</p>
                          @endif
                        </tbody>
                      </table>
                {!! $works->render() !!}
                    </div>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
