@extends('layouts.app')

@section('title', 'Groups')

@section('content')

<a href="/groups/create" class=" btn card-link btn-primary">Tambah group</a><br>
    @foreach ($groups as $group)
<br>
        <div class="card-header" style="width: 18rem;">
            <div class="card-body">
                <div class="card-header">
                    <a href="/groups/{{ $group['id'] }}" class="card-title">{{ $group['name'] }}</a>
                </div>

                <p class="card-text">{{ $group['description'] }}</p>
                <hr>
                <a href="/groups/addmember/{{$group['id']}}" class="card-link btn btn-primary">Tambah Anggota Teman</a>
                <ul class="list-group">

                @foreach ($group->friends as $friend )


                      <li class="list-group-item d-flex justify-content-between align-items-center">
                      {{$friend->nama}}
                      <form action="/groups/deleteaddmember/{{ $friend->id }}" method="POSt">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bedge card-link btn btn-danger">Delete</button>

                    </form>
                      </li>

                      </li>
                @endforeach
                </ul>

                <hr>




                <form action="/groups/{{ $group['id'] }}" method="POSt">
                    <a href="/groups/{{ $group['id'] }}/edit" class=" btn card-link btn-warning">Edit group</a>
                    @csrf
                    @method('DELETE')
                    <button class=" btn card-link btn-danger">Delete group</button>
                </form>
            </div>
        </div>

    @endforeach
    <div>
        {{ $groups->links() }}
    </div>
@endsection
