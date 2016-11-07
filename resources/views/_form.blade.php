<form method="post">
    <div class="form-group">
        <label for="first_name">Voornaam</label>
        <input class="form-control" type="text" name="first_name" value="{{isset($person['first_name']) ? $person['first_name'] : ''}}">
    </div>
    <div class="form-group">
        <label for="last_name">Achternaam</label>
        <input class="form-control" type="text" name="last_name" value={{isset($person['last_name']) ? $person['last_name'] : ""}}>
    </div>
    <div class="form-group">
        <label for="street_name" style="width: 73%; float: left">Straatnaam</label>
        <label for="home_number" style="width: 23%; float: right">Huisnummer</label>

        <input class="form-control" style="width: 73%; float: left; margin-bottom: 15px" type="text" name="street_name" value={{isset($person['street_name']) ? $person['street_name'] : ""}}>
        <input class="form-control" style="width: 23%; float: right; margin-bottom: 15px" type="text" name="home_number" value={{isset($person['home_number']) ? $person['home_number'] : ""}}>
    </div>
    <div class="form-group">
        <label for="phone_number">Telefoonnummer</label>
        <input class="form-control" type="text" name="phone_number" value={{isset($person['phone_number']) ? $person['phone_number'] : ""}}>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="hidden" name="id" value="{{isset($person_id) ? $person_id : ""}}">

    <button class="btn btn-primary" type="submit">{{ $button_text }}</button>

</form>