@extends ('layouts.app')
@section('content')

<div class="wrapper create_pizza">
<h1>create new pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label>Your name:</label>
<input type="text" name="name">
<br>
<label> type </label>
<select name="type" id="type">
<option value='margareta'>Margareta</option>
<option value='hawaian'>Hawaian</option>
<option value='volcano'>Volcano</option>
<option value='veg supreme'>Veg Supreme</option>
</select>
<label> base </label>
<select name="base" id="base">
<option value='cheasy crust'>cheasy crust</option>
<option value='garlic crust'>garlic crust</option>
<option value='thin & crispy'>thin & crispy</option>
<option value='thick'>thick</option>
</select>
<fieldset>
<label>Extra toppings</label> <br>
<input type="checkbox" name='toppings[]' value="garlic"> garlic<br>
<input type="checkbox" name='toppings[]' value="olives"> olives<br>
<input type="checkbox" name='toppings[]' value="paper"> paper<br>
<input type="checkbox" name='toppings[]' value="mushroms"> mushroms<br>

</fieldset>

<input type="submit" value="order">

</form>



</div>

@endsection