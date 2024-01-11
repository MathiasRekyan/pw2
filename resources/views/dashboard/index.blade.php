@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Halo Manager {{ auth()->user()->name }}</h1><br>
    </div>
    <h2>Silahkan pilih menu disamping kiri ini ya!</h2>
@endsection