<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="grid grid-cols-12 mt-7 gap-4">
        <div class="col-start-5 col-span-4">
            <h3 class="mt-4 mb-4 text-gray-500 font-semibold text-center text-3xl">{{__("Followers:")}}</h3>
            @if ($followers!=null && sizeof($followers)>0)
                @foreach ($followers as $follower)
                    <div class="flex flex-col mb-3">
                        <div class="flex flex-row justify-around">
                            <div class="flex flex-row">
                                <a href="/{{$follower->username}}"><img src="{{ $follower->profile_photo_url }}" alt="avatar" class="rounded-full h-10 w-10 mr-3" /></a>
                                <div class="flex flex-col self-center">
                                    <a href="/{{$follower->username}}" class="text-base hover:underline whitespace-nowrap">{{ $follower->username }}</a>
                                    <h3 class="text-sm text-gray-500 truncate whitespace-nowrap" style="max-width: 25ch">{{$follower->bio}}</h3>
                                </div>
                            </div>
                            @livewire('follow-button', ['profile_id' => $follower->id], key($follower->id))
                        </div>
                    </div>
                @endforeach
                @else
                <div class="my-10 text-center">
                    <p class="font-semibold">{{__('Nothing to show right now!')}}</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
