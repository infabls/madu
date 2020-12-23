@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Welcome :Name', ['name' => $logged_in_user->name])
        </x-slot>

        <x-slot name="body">
            @lang('Welcome to the Dashboard')<br>
            <a href="/admin/allworks">Все работы</a><br>
            <a href="/admin/orders">Все заявки</a><br>
        </x-slot>
    </x-backend.card>
@endsection
