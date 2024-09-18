<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<div class="container">
    <h2>Edit Parking Entry</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Update form -->
    <form action="{{ isset($parking->id) ? route('parking.update', $parking->id) : route('parking.store') }}" method="POST">
        @csrf
        <!-- Content textarea -->
        <div class="form-group">
            <label for="content">Home Page Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ isset($parking->content) ? $parking->content: '' }}</textarea>
        </div>

        <!-- Active checkbox -->
        <div class="form-group form-check">
            <input type="checkbox" id="active" name="active" class="form-check-input" {{ isset($parking->active) && $parking->active=='1' ? 'checked' : '' }}>
            <label for="active" class="form-check-label">Active</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</x-app-layout>
