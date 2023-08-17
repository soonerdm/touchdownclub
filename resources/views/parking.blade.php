@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
<h2>Game Day Parking</h2>
<style>
iframe {
    display:block;
    width:100%;
}
</style>


<p>The Touchdown Club of Oklahoma offers free game day parking for members in the Parkview and South Jenkins lots with a few select spaces in the Asp. Ave. Garage that are available via a lottery</p>

<p>When this option is available you will get a letter in the mail and at that point you may email <a href="mailto:outdclub@outdclub.com">outdclub@outdclub.com</a> for your preference.</p>

<p>
    If requesting Asp Ave. Garage Parking Facility, please include your credit card information and mark a second choice in case you aren't drawn.
  </p>

  <div class="parking_form" style="height:1600px">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <div class="elfsight-app-46a4e72f-c615-4ae3-9545-ed7357969fe3"></div>
  </div>

</div>
@stop
