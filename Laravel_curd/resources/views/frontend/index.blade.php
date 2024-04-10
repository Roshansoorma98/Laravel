<x-app-web-layout>
    {{-- <x-slot name="title">
      Laravel curd app
    </x-slot> --}}

    <x-slot:title>
       Laravel Curd App
    </x-slot>
    <div class="py-5">
        <div class="container">
            <h4>Welcome to index page</h4>
        </div>
    </div>
    <x-slot:scripts>
        <script>
            alert('This is my script');
        </script>
       
    </x-slot>


</x-app-web-layout>