@extends('layout.app')

@section('content')
<div>   
    <header class="flex justify-between w-full bg-white text-sm py-4">
        <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap items-center justify-between" aria-label="Global">
            <!-- Logo -->
            <div class="flex items-center gap-x-2">
                
                <!-- Add your logo here -->
                <a class="flex-none text-xl font-semibold text-[#4D8380]" href="#">ImIn</a>
            </div>

            <!-- Navigation Links -->
            <div class="flex items-center gap-x-2">
                <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#" aria-current="page">Landing</a>
                <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Account</a>
                <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Work</a>
                <a class="font-medium text-[#4D8380] hover:text-gray-400 focus:outline-none focus:ring-1 focus:ring-gray-600" href="#">Blog</a>
            </div>

            <!-- CTA -->
            <div class="flex items-center gap-x-2">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#F28B2E] text-white hover:bg-orange-600 focus:outline-none focus:ring-1 focus:ring-gray-600">
                    Button
                </button>
            </div>
        </nav>
    </header>

    <!-- component -->
    <example-component></example-component>
</div>
@endsection