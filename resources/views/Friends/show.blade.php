@extends('layouts.app')

@section('title', 'Cobaaaa')

@section('content')
<div class="card">
    <div class="card-body">
        <h3>Nama teman : {{ $friend['nama'] }}</h3>
        <h3>No Tlp teman : {{ $friend['no_tlp'] }}</h3>
        <h3>Alamat teman : {{ $friend['alamat'] }}</h3>
        <h3>Groups yang diikuti:@if ($friend->groups_id != 0) {{$friend->groups->name}} @else Belumm Masuk groups @endif </h3>
        group yang pernah diikuti :

    </div>
</div>
@endsection
