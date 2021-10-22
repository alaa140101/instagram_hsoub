<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="grid grid-cols-12 mt-7 gap-4">
        <div class="col-start-5 col-span-4">
            <h3 class="mt-4 mb-4 text-gray-500 font-semibold text-center text-3xl">{{__("Follow requests:")}}</h3>
            @if ($requests!=null && sizeof($requests)>0)
                @foreach ($requests as $req)
                    <div class="flex flex-col mb-3">
                        <div class="flex flex-row justify-around">
                            <div class="flex flex-row">
                                <a href="/{{$req->username}}"><img src="{{ $req->profile_photo_url }}" alt="avatar" class="rounded-full h-10 w-10 me-3" /></a>
                                <div class="flex flex-col self-center">
                                    <a href="/{{$req->username}}" class="text-base hover:underline whitespace-nowrap">{{ $req->username }}</a>
                                    <h3 class="text-sm text-gray-500 truncate whitespace-nowrap" style="max-width: 25ch">{{$req->bio}}</h3>
                                </div>
                            </div>
                            @if($profile->status == 'private')
                             @livewire('accept-follow', ['profile_id' => $req->id], key($req->username))
                            @endif
                            @livewire('follow-button', ['profile_id' => $req->id], key($req->id))
                        </div>
                    </div>
                @endforeach
                <div class="col-span-3 mt-10">{{ $requests->links() }}</div>
                @else
                <div class="my-10 text-center">
                    <p class="font-semibold">{{__('Nothing to show right now!')}}</p>
                </div>
            @endif
              <h3 class="mt-4 mb-4 text-gray-500 font-semibold text-center text-3xl">{{__("Pendings Following requests:")}}</h3>
              @if ($pendings!=null && sizeof($pendings)>0)
                  @foreach ($pendings as $req)
                      <div class="flex flex-col mb-3">
                          <div class="flex flex-row justify-around">
                              <div class="flex flex-row">
                                  <a href="/{{$req->username}}"><img src="{{ $req->profile_photo_url }}" alt="avatar" class="rounded-full h-10 w-10 me-3" /></a>
                                  <div class="flex flex-col self-center">
                                      <a href="/{{$req->username}}" class="text-base hover:underline whitespace-nowrap">{{ $req->username }}</a>
                                      <h3 class="text-sm text-gray-500 truncate whitespace-nowrap" style="max-width: 25ch">{{$req->bio}}</h3>
                                  </div>
                              </div>
                              @livewire('follow-button', ['profile_id' => $req->id], key($req->id))
                          </div>
                      </div>
                  @endforeach
                  <div class="col-span-3 mt-10">{{ $pendings->links() }}</div>
                  @else
                  <div class="my-10 text-center">
                      <p class="font-semibold">{{__('Nothing to show right now!')}}</p>
                  </div>
              @endif
        </div>
    </div>
</x-app-layout>
