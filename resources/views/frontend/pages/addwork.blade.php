@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <x-frontend.card>
                    <x-slot name="header">
                        Добавить новую работу <a href="/my-works">Все работы</a>
                    </x-slot>

                    <x-slot name="body">
                        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="/addwork" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                          <label for="name">Название</label>
                          <input  value="" type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="price">Цена</label>
                          <input  value="" type="number" id="price" name="price" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="image">Фотография</label>
                          <input  value="" type="file" name="image" id="image" class="form-control" required>
                        </div>
                                            


                        <button type="submit" class="btn btn-primary">Сохранить</button>
                      </form>
                    </x-slot>
                </x-frontend.card>
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
