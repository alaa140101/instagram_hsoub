<div class="flex flex-col items-start pl-4 pb-1">
    <div class="flex flex-row items-center">
        <button class="text-2xl mr-3 focus:outline-none" wire:model="like-button"
        wire:click="ToggleLike({{$post_id}})">
            <i class="{{$isLiked ? "fas text-red-500" : "far"}} fa-heart"></i>
        </button>
      <button class="text-2xl mr-3 focus:outline-none"><i class="far fa-comment"></i></button>
      <button class="text-2xl mr-3 focus:outline-none"><i class="far fa-square"></i></button>
    </div>
    <span>{{__('Liked by')}} {{$likeCount}}
    </span>
  </div>
