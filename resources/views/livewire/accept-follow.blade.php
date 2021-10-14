<div class="self-center">
    <button wire:model="accept-follow" wire:click="toggleAccept({{$profile_id}})"
     class="text-blue-500 font-semibold hover:text-blue-400">{{__($status)}}</button>
</div>
