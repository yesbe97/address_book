@extends('layout.base')

@section('content')
<h1>Overzicht</h1>
    <table>
        <tr>
            <th>Naam <a href="/">A</a> <a href="/desc/type">Z</a></th>
            <th>Adres</th>
            <th>Stad</th>
            <th>Postcode</th>
            <th>Telefoonnummer</th>
            <th>Acties</th>
        </tr>
        @foreach($persons as $person)
            <tr>
                <td>{{$person['first_name']}} {{$person['last_name']}}</td>
                <td>{{$person['street_name']}} {{$person['home_number']}}</td>
                <td>{{$person['city']}}</td>
                <td>{{$person['zipcode']}}</td>
                <td>{{$person['phone_number']}}</td>
                <td><a href="/{{$person['id']}}/edit">Edit</a> <a href="#" onclick="removeCheck({{$person['id']}});">Remove</a></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')
    <script type="application/javascript">
        function removeCheck(id){
            if (confirm('Weet je zeker dat je deze relatie wilt verwijderen?')) {
                window.location.replace("/"+id+"/remove");
            }
        }
    </script>


@endsection