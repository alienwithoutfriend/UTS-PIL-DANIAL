@extends('layouts.app')

@section('title', 'Cobaaaa')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama Group : {{ $group['name'] }}</h3>
        <h3>Deskripsi Group : {{ $group['description'] }}</h3>
        <h3>Jumlah Member Aktif : {{$group->friends_count}}</h3>
        <ul class="list-group">
            @foreach ($group->friends as $friend)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$friend->nama}}
            </li>
            @endforeach
    </div>
</div>
@endsection
