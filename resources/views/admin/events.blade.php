<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <form method="POST" action="{{ route('events.store') }}">
                       @csrf
                       <div>
                           <label for="active">Active:</label>
                           <input type="checkbox" id="active" name="active" value="1">
                       </div>

                       <div>
                           <label for="details">Details:</label>
                           <textarea id="my-editor" name="details"></textarea>

                       </div>

                       <div>
                           <button type="submit" class="btn btn-crimson">Create Event</button>
                       </div>
                   </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    tinymce.init({
        selector: '#my-editor',
        height: 400,
        plugins: [
            'advlist autolink lists link image',
            'charmap print preview anchor',
            'searchreplace visualblocks code',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help'
    });
</script>

