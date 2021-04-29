@if(session('success'))

    <div x-data="{open: true}" x-show.transition.opacity.duration.500="open" @click.away="open=false" class="success flex justify-center w-44">
        <div class="font-medium">
            {{ session('success') }}
        </div>
        <div @click="open=false" class="ml-2 cursor-pointer text-gray-400 hover:text-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
@endif
