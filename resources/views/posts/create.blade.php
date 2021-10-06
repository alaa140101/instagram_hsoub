<x-app-layout>
  <x-slot name="header">
    <div class="flex justify-center">
      <h1 class="text-2xl md:text-5xl mt-7">{{__('Add New Post')}}</h1>
    </div>
  </x-slot>
  <div class="grid grid-col-5 mt-7">
    <form action="/posts" method="POST" class="col-start-2 col-span-3 max-w-4xl" enctype="multipart/form-data" autocomplete="off">
      @csrf 

      <div>
        <x-jet-label value="{{__('Caption')}}"/>
        <x-jet-input class="block mt-1 w-full h-20" type="textarea" name="post_caption" :value="old('post_caption')" autofocus />
      </div>

      <div class="mt-4">
        <x-jet-label value="{{__('Image')}}" />
        <x-jet-input class="block mt-1 w-full bg-white p-2" type="file" name="image_path" :value="old('image_path')" required autofocus />
      </div>

      <x-jet-button class="mt-4">
        {{__('Publish')}}
      </x-jet-button>
    </form>
  </div>
</x-app-layout>