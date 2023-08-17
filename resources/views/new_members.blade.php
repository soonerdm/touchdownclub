@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
    <h2>New Membership</h2>
     <form action="https://outdclub.foxycart.com/cart" method="post">
         <input type="hidden" name="name" value="Yearly Membership">
         <input type="hidden" name="price" value="285">
      <!--  <input type="hidden" name="code" value="sku123" /> -->

         <label class="label_left">OU TX tix:</label>
             <input type="checkbox" name="OU/TX Tix" value="Y">
             <span style="font-size: 10px;">waiting list based on join date</span>

    <br>
 <label class="label_left">How did you hear about us</label>
     <select name="How Did you hear about us">
         <option value="Brochure"> Brochure</option>
         <option value="Sooner Spectator">Sooner Spectator</option>
         <option value="Member">Member</option>
         <option value="Other">Other</option>
     </select>
     <br>
            <label>Would you like to receive information<br> about events and last minute offers by e-mail?</label>
             <input name="Subscribe To Emails" type="checkbox" value="Y">
      <br>
             <label>Would you like to receive the free<br> annual subscription to Sooner Spectator?</label>
                 <input name="Subscribe To Sooner Spectator" type="checkbox" value="Y">
        <br>
    <label>Sooner Club Acct. #</label> <input type="text" name="Acct Number">
    <br>

     <input type="submit" name="Membership" value="Click to Join $285" class="submit" rel="shadowbox;height=140;width=120"> <small>(Includes Processing Fees)</small>

</div>



@stop
