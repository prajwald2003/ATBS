<div class="header" style="text-align:center;padding:20px;color:white;font-weight:bold;"> <h1>AIRLINE BOOKING PLATFORM<h1>

<p>Book Flight tickets

and Keep track of your Booking History</p>

<div class="container">

<form class="card" style="padding:20px;" action bookingtickets-backend.php?

method="POST" id="m">

<h3 style="text-align:center">PLAN YOUR JOURNEY

Select id="source" name="source" class="form-control" required>

<option selected disabled">Select Source Airport<option>

<?php require once"selectairports.php": foreach (Stuples us Srow)

echo'<option value=" Srow(0) Srow(2) Srow[1])</option

select id-destinution" name="destination" class="form-control" required>

<option selected disabled">Select Destination Airport</option>

</pbp require_once selectairports.php foreach (Stuples as Srow) (

echo'<option value="$row[0], Srow[2] (Srow[T]/option>

<<select><br><br>

<select id="class" name="class" class="form-control" required> <option value economy">Economy Class</option>

<option value="business">Business Class</option> <option value="first">First Class</option>
</select> <br> <br>
<label>Date of Departure:</label>

<input name="date_of_depart" type=

"date" required ><br><br>

31/46

<div class="row">

12 col-sm-6">

<div class="col-xs-

btn-success" Flights</button>

type

"Submit">Check

</div>

12 col-sm-6">

<div class="col-xs-

bin-danger" Entries</button>

type

<button class="bta

"reset">Clear

</div>
<br>
</form>