@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 16px;">
        <div class="col-lg-6" style="border-right:1px solid #000000;">
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
<br>
     <button type="submit" name="Membership" class="btn btn-crimson">Click to Join $285</button><small>(Includes Processing Fees)</small>

</div>
<div class="col-lg-6">
         <h6 style="line-height:1; margin:0;">Become a Member of the</h6>
             <h3>National Football Foundation</h3>
             <p><a href="https://footballfoundation.org" target="_blank"><img src="img/cff.png" align="right"></a>
             Founded in 1947 with early leadership from General Douglas MacArthur, legendary Army coach Earl "Red" Blaik and immortal journalist Grantland Rice,
             the National Football Foundation (NFF) & College Hall of Fame is a non-profit educational organization that runs programs designed to use the power of amateur
              football in developing scholarship, citizenship and athletic achievement in young people. <a href="https://footballfoundation.org" target="_blank">The National Football Foundation</a></p>
              <p>NFF Programs include: The Chick-fil-A College Football Hall of Fame, The William V. Campbell Trophy® and National Scholar-Athlete Program, Future For Football®,
               NFF Chapter Network, NFF Annual Awards Dinner Presented by Las Vegas, Senior High School Showcases, NFF National High School Academic Excellence Awards, NFF Hatchell Cup trophy,
               NFF Major Awards, News, Outreach and Partnerships.

              </p>
              <div class="container">
                 <a href="https://outdclub.foxycart.com/cart?name=College+Football+HOF+Lifetime+Member&amp;price=1000" class="btn btn-crimson">Lifetime Member $1000</a>
               </div>
                <div class="container" style="margin:8px 0;">
                        <a href="https://outdclub.foxycart.com/cart?name=All+Conference+Club+(3+Year)&amp;price=150" class="btn btn-crimson">All Conference Club (3 Year) $150</a>
                      </div>
                    <div class="container" style="margin:8px 0;">
                        <a href="https://outdclub.foxycart.com/cart?name=Varsity+Club+(1+Year)&amp;price=150" class="btn btn-crimson">Varsity Club (1 Year) $60</a>
                      </div>
            </div>
</div>

</div>
<!-- end of row -->
</div>


@stop
