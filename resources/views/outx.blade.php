
@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')

<div class="container">
<h2>The Greatest Rivalry in All of Sport</h2>
<img src="/img/cottonbowl.jpg" align="right" width="500" style="border: 1px solid #000;">
<p>The Oklahoma-Texas football game in the Cotton Bowl has a storied history that spans decades and has become one of the most iconic rivalries in college
football. Dating back to 1900, when the two teams first clashed on the gridiron, the matchup has consistently showcased the intensity, passion, and skill
 of both programs.</p>

 <p>The game's long-standing tradition of taking place annually at the Cotton Bowl Stadium in Dallas, Texas, adds to its significance.
 The rivalry reached new heights in the 1960s, with the emergence of legendary coaches Bud Wilkinson and Darrell Royal leading their respective teams
 to numerous conference championships and national titles. The game has witnessed thrilling moments, unforgettable performances, and memorable upsets,
 capturing the attention of fans nationwide. From the "Red River Rivalry" to the iconic Red River Showdown,
 this clash between the Sooners and the Longhorns continues to captivate college football enthusiasts, symbolizing the spirit of competition and the
 rich history of the sport.
 </p>
 <p>
 Join the Touchdown Club Today and Join the Weekends exclusive activities
 </p>
<form action="https://outdclub.foxycart.com/cart" target="_self" method="post" accept-charset="utf-8" name="tdform">
    <input type="hidden" name="name" value="OU/TX Weekend Touchdown Club packages" />
    <input type="hidden" name="price" value="40" />


    <h2>Fairgrounds Transportation For The Game</h2>
    <span style="font-size: 14px;"> <h6>Reserve your tickets for the bus to the OU/TX game</h6> <br>
      Reserve your tickets for the bus to the OU/TX game.

      The buses are police escorted, and leave from and return to the Renaissance Dallas Addison. Buses will leave approximately 4 hours before game time. Times and further loading instructions will be sent with your wristbands when the game time is released.  After the game, the buses will leave the fair as they fill up, with the last bus leaving 1 1/2 hours after the game.
       <br>  Tickets are $40 per person.
        <!-- PRICE HERE --></span>
    <br>
    <select name="quantity">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <select>
            qty

          <br>
            <input type="submit" name="Type" value="Bus Pass" id="busPass"  class="btn btn-crimson" >



</form>
</div>

@stop
