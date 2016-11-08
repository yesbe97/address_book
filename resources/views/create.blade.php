@extends('layout.base')

@section('content')
    <h1>Toevoegen</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('_form', ["button_text" => "Toevoegen"])
@endsection