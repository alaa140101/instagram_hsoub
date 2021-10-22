<div class="flex flex-col items-start pl-4 pb-1">
    <div class="flex flex-row items-center">
        <button class="text-2xl mr-3 focus:outline-none" wire:model="like-button"
        wire:click="ToggleLike({{$post_id}})">
            <i class="{{$isLiked ? "fas text-red-500" : "far"}} fa-heart"></i>
        </button>
      <button class="text-2xl mr-3 focus:outline-none"
      onClick="document.getElementById('comment{{$post_id}}').focus()"><i class="far fa-comment"></i></button>
      <button class="text-2xl mr-3 focus:outline-none"
      onClick="copyToClipboard({{$post_id}})" id="{{$post_id}}" value="{{url('')}}/posts/{{$post_id}}"
      ><i class="far fa-share-square"></i></button>
    </div>
    <span>{{__('Liked by')}} {{$likeCount}}
    </span>
  </div>
