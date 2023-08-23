<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1>Red River Rivalry</h1>
            <!-- Create or Update Redriver Form -->
            <form action="{{ isset($redriver) ? route('redriver.update', $redriver->id) : route('redriver.store') }}" method="POST">
                @csrf

                <!-- Active -->
                <div class="form-group">
                    <label for="active">Active:</label>
                    <input type="checkbox"  id="active" name="active" {{ isset($redriver) && $redriver->active ? 'checked' : '' }}>
                </div>

                <!-- Title -->
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($redriver) ? $redriver->title : '' }}">
                </div>

                <!-- Details -->
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea id="details" name="details" class="form-control">{{ isset($redriver) ? $redriver->details : '' }}</textarea>
                </div>

                <!-- Bus Tickets -->
                <div class="form-group">
                    <label for="bus_tickets">Bus Tickets:</label>
                    <input type="number" id="bus_tickets" class="form-control" name="bus_tickets" value="{{ isset($redriver) ? $redriver->bus_tickets : '' }}">
                </div>

                <!-- Price -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" id="price" class="form-control" name="price" value="{{ isset($redriver) ? $redriver->price : '' }}">
                </div>

                <!-- Home Content -->
                <div class="form-group">
                    <label for="home_content">Home Page Content:</label>
                    <textarea id="home_content" class="form-control" name="home_content">{{ isset($redriver) ? $redriver->home_content : '' }}</textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-crimson">Save</button>
            </form>
                <table
                            <thead>
                                <tr>
                                    <th>ID.</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Title</th>
                                    <th>Active</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($redrivers as $redriver)
                                    <tr>
                                        <td>{{ $redriver->id }}</td>
                                        <td>{{ $redriver->details }}</td>
                                        <td>{{ $redriver->price }}</td>
                                        <td>{{ $redriver->title }}</td>
                                        <td>{{ $redriver->active }}</td>
                                        <!-- Add more columns as needed -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

               </div>
            </div>
        </div>
    </div>


</x-app-layout>
