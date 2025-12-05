@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
<h2>Game Day Parking</h2>


<!--
<p>The Touchdown Club of Oklahoma offers free game day parking for members in the Parkview and South Jenkins lots.  We also have a few select spaces in the Asp Ave. Garage that are available on a lottery basis*.

   Parking information will be mailed to you.  You must fill out a form to receive parking.  You can fill the form out here or email your preference to <a href="mailto:outdclub@outdclub.com">outdclub@outdclub.com</a>.

   If requesting Asp Ave. Garage Parking Facility, please include your credit card information and mark a second choice in case you aren't drawn.


  </p>
-->



@if($parking->active ==1 )

<p>
   If we are chosen to host the first round at home, you can purchase a parking pass for either the Parkview or South Jenkins Lot.  (We are charging what the University is charging us for these passes.)  The passes are $30 each.  There will be a limit of 1 pass per membership. When you submit the form, your credit card will be charged.  We will send you pass to either your cell phone (must be a smart phone) or email address.  No refunds will be given.
    If you have any questions or problems, please call 405-840-1460.
</p>

<form action="https://outdclub.foxycart.com/cart" target="_self" method="post" accept-charset="utf-8" name="tdform">
    <input type="hidden" name="name" value="CFP Parking Pass" />
    <input type="hidden" name="price" value="30" />
    <input type="radio" id="Parkview_lot" name="parkinglot" value="Parkview_lot">
    <label for="option1">Parkview Lot</label><br>

    <input type="radio" id="South_Jenkins" name="parkinglot" value="South_Jenkins">
    <label for="option2">South Jenkins</label><br>
    <input type="submit" name="Type" value="Submit Form" id="parkinglotSubmit" class="btn btn-crimson">

</form>
<!--
  <div class="parking_form" style="display: flex;
                                     flex-direction: column;
                                     min-height: 100vh;">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-46a4e72f-c615-4ae3-9545-ed7357969fe3" style="flex:1;"></div>
  </div>
-->
  @endif

</div>
@stop
