<x-app-layout>
  <x-slot name="header">

  </x-slot>

  <div class="grid grid-cols-5 mt-7 gap-4">
    <div class="col-start-2 col-span-3 border-solid border-gery-300">
      <div class="grid grid-cols-5">
        <div class="col-span-3">
          <div class="flex justify-center"><img src="/storage/{{ $post->image_path }}" alt=""></div>
        </div>
        <div class="col-span-2 bg-white flex flex-col">
          <div class="flex flex-row p-3 border-b border-solid border-gery-300 items-center justify-between">
            <div class="flex flex-row items-center">
              <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->username }}" class="rounded-full h-10 w-10 mr-3">
              <a href="/{{ $post->user->username }}" class="font-bold hover:underline">{{ $post->user->username }}</a>
            </div>
            <div>
              <button class="bg-blue-500 rounded-lg shadow px-2 py-1 text-white">follow</button>
            </div>
          </div>
          <div class="border-b border-solid border-gery-300 h-full">
            <div class="grid grid-cols-5 overflow-y-auto">
              <div class="col-span-1 m-3">
                <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->username }}" class="rounded-full h-10 w-10">
              </div>
              <div class="col-span-4 mt-5 mr-7">
                <a href="/{{ $post->user->username }}" class="font-bold hover:underline">{{ $post->user->username }}</a>
                <span>{{ $post->post_caption }}</span>
              </div>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="flex flex-col items-start pl-4 pb-1">
              <div class="flex flex-row items-center">
                <button class="text-2xl mr-3 focus:outline-none"><i class="far fa-heart"></i></button>
                <button class="text-2xl mr-3 focus:outline-none"><i class="far fa-comment"></i></button>
                <button class="text-2xl mr-3 focus:outline-none"><i class="far fa-square"></i></button>
              </div>
              <span>{{__('Liked by')}} 5</span>
            </div>
            <div class="border-b border-solid border-gery-300 pl-4 pb-1 text-xs">
              {{ $post->created_at->format('M j o') }}
            </div>
          </div>
          <div class="p-4">
            <div class="flex flex-row items-center justify-between">
              <input type="text" class="w-full outline-none border-none p-1" id="comment" placeholder="{{__('Add Comment') }}" name="comment" autofocus>
              <button class="text-blue-500 font-semibold hover:text-blue-700" type="submit">{{__('Post')}}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</x-app-layout>