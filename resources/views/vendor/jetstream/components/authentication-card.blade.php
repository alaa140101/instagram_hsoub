<div class="min-h-screen flex flex-row sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <img src="logo.jpg" alt="logo" class="xl:w-60 xl:h-80 md:w-64 md:h-64 w-80 h-80 mr-12">
    </div>

    <div class="flex flex-col">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
