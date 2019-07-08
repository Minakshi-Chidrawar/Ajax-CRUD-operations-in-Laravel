@extends('layouts.app')

@section('title', 'Name List')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers List</h1>
            <p><a href="customers/create">Add New Name</a></p>
        </div>
    </div>

    @foreach($names as $name)
        <div class="row">
            <div class="col-2">
                {{ $name->id }}
            </div>
            <div class="col-4">
                <a href="/names/{{ $name->id }}">
                    {{ $name->name }}
                </a>
            </div>
        </div>
    @endforeach
@endsection