@extends('layouts.pages')

@section('title', 'Page Title')

@section('content')
<div class="container">
    <h2>Events</h2>

@foreach ($events as $event)
    <div>
        <h3>Event ID: {{ $event->id }}</h3>
        <p>Active: {{ $event->active ? 'Yes' : 'No' }}</p>
        <p>Details: {{ $event->details }}</p>
    </div>
@endforeach

</div>

@stop
