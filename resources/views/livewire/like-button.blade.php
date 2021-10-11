<div>
    <button class="text-2xl mr-3 focus:outline-none" wire:model="like-button" wire:click="ToggleLike({{$post_id}})">
        <i class="{{$isLiked ? "fas text-red-500" : "far"}} fa-heart"></i>
    </button>
</div>
