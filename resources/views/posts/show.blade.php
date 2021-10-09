<x-app-layout>
  <x-slot name="header">

  </x-slot>

  <div class="grid grid-cols-5 mt-7 gap-4">
    <div class="col-start-2 col-span-3 border-solid border-gery-300">
      <div class="grid grid-cols-5">
        <div class="col-span-3">
          <div class="flex justify-center">
              <img src="/storage/{{ $post->image_path }}" id="postImage" style="max-height: 80vh">
            </div>
        </div>
        <div class="col-span-2 bg-white flex flex-col">
          <div class="flex flex-row p-3 border-b border-solid border-gery-300 items-center justify-between" id="sec1">
            <div class="flex flex-row items-center">
              <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->username }}" class="rounded-full h-10 w-10 mr-3">
              <a href="/{{ $post->user->username }}" class="font-bold hover:underline">{{ $post->user->username }}</a>
            </div>
           @if (auth()->user()->id == $post->user_id)
           <div class="text-gray-500">
             <a href="/posts/{{ $post->id }}/edit"><i class="fas fa-edit"></i></a>
           <span class="font-bold mx-2">|</span>
           <form action="{{ route('posts.destroy', $post->id) }}" class="inline-block" method="post">
            @csrf
            @method("DELETE")
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post')" >
                <i class="fa fa-trash"></i>
            </button>
            </form>
        </div>
           @else
           <div>
             <button class="bg-blue-500 rounded-lg shadow px-2 py-1 text-white">follow</button>
           </div>
           @endif
          </div>
          <div class="border-b border-solid border-gery-300 h-full">
            <div class="grid grid-cols-5 overflow-y-auto" id="commentArea">
              <div class="col-span-1 m-3">
                <img src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->username }}" class="rounded-full h-10 w-10">
              </div>
              <div class="col-span-4 mt-5 mr-7">
                <a href="/{{ $post->user->username }}" class="font-bold hover:underline">{{ $post->user->username }}</a>
                <span>{{ $post->post_caption }}</span>
              </div>
              @foreach ($post->comments as $comment)
              <div class="col-span-1 m-3">
                  <img src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->username }}" class="rounded-full h-10 w-10">
              </div>
              <div class="col-span-4 mt-5 mr-7">
                  <a href="/{{ $comment->user->username }}" class="font-bold hover:underline">{{ $comment->user->username }}</a>
                  <span>{{ $comment->comment }}</span>
                  <div class="text-gray-500 text-xs">{{ $comment->created_at->format('M j o') }}
                    @if (auth()->user()->id == $comment->user_id)
                      <a href="/comments/{{ $comment->id }}/edit" class="text-xs ms-2"><i class="fas fa-edit"></i></a>
                      <form action="{{ route('comments.destroy', $comment->id) }}" class="inline-block" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" onclick="return confirm('Are you sure you want to delete this comment')" >
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>
                    @endif
                </div>
              </div>
              @endforeach
            </div>
          </div>
          <div class="flex flex-col" id="sec3">
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
          <div class="p-4" id="sec4">
              <form action="/comments" method="post" autocomplete="off">
                @csrf
                    <div class="flex flex-row items-center justify-between">
                        <input type="text" class="w-full outline-none border-none p-1" id="comment" placeholder="{{__('Add Comment') }}" name="comment" autofocus>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        <button class="text-blue-500 font-semibold hover:text-blue-700" type="submit">{{__('Post')}}</button>
                    </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
