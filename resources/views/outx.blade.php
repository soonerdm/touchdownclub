
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
    <input type="hidden" name="price" value="{{$redriver->price}}" />


    <h2>Fairgrounds Transportation For The Game</h2>
    <span style="font-size: 14px;"> <h6>{{$redriver->title}}</h6>
     {{$redriver->details}}
       <br>  Tickets are {{$redriver->price}} per person.
        <!-- PRICE HERE --></span>
    <br>
    <select name="quantity">
    @for ($i = 1; $i <= $redriver->bus_tickets; $i++)
        <!-- Your loop content here -->
      <option value="{{$i}}">{{$i}}</option>
    @endfor
    </select>
     qty

          <br>
      <input type="submit" name="Type" value="Bus Pass" id="busPass" class="btn btn-crimson" {{ $redriver->active == 0 ? 'disabled' : '' }}>



</form>
</div>

@stop
