<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h1 class="text-2xl md:text-5xl mt-7">{{__('Apply filters')}}</h1>
        </div>
    </x-slot>

    @livewire('filters',['post_caption' => $post_caption, 'image_path' => $image_path])


</x-app-layout>
