@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
      <form action="https://outdclub.foxycart.com/cart" method="post" rel="shadowbox;height=140;width=120" accept-charset="utf-8">
                 <input type="hidden" name="name" value="Red White Game BBQ Tickets" />
                 <input type="hidden" name="price" value="35" />

                 <label class="label_left" style="font-weight: bold">Annual Spring Game BBQ </label><br>
                 <span style="font-size: 14px;"></span>
                 <br>
                 <select name="quantity">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>

                 </select>
                     qty
    		<br>
                 <br>
                 <input type="submit" name="Type" value="Spring Game BBQ Tickets">
                 </form>
    <br>
    <hr>

    <strong>
        Game Tickets  each<br>

    </strong>

    <form action="https://outdclub.foxycart.com/cart" method="post" rel="shadowbox;height=140;width=120" accept-charset="utf-8">
        <input type="hidden" name="name" value="Red White Game Tickets" />
        <input type="hidden" name="price" value="10" />
        <select name="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>

        </select>
        qty

    <br>
        <br>


    		Comments<br>
    		<textarea name=comments rows=3 cols=24></textarea>
    <br>
        <input type="submit" name="Type" value="Spring Game Tickets">
            </form>

                     <hr>
    <br>
    In order to add game tickets after you add your BBQ tickets please click the back button and add the game tickets
</div>
@stop
