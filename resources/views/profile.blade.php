<x-app-layout>
    <x-slot name="header">
        <header>
            <div class="grid grid-cols-5 gap-4">
                <div class="col-start-2 col-span-1 flex justify-center w-auto mt-5">
                    <img src="{{ $profile->profile_photo_url }}" alt="{{ $profile->username }}" class="w-40 h-40 rounded-full">
                </div>
                <div class="col-start-3 col-span-2 flex justify-start items-center w-auto m-0">
                    <div class="grid grid-rows-2">
                        <div class="flex flex-row items-center">
                            <h1 class="font-light text-3xl mr-14">{{$profile->username}}</h1>
                            <a href="{{route('profile.show')}}" class="border border-solid border-gery-300 rounded-md py-0 px-5 mr-16 whitespace-nowrap">
                                {{__('Edit Profile')}}</a>
                            <a href="#">
                                <x-jet-button class="ml-8 leading-none whitespace-nowrap">
                                    {{__('Add Post')}}
                                </x-jet-button>
                            </a>
                        </div>
                        <div>
                            <ul class="flex flex-row mb-5">
                                <li class="mr-10 cursor-pointer"><span class="font-semibold">15</span>{{__('posts')}}</li>
                                <li class="mr-10"><a href="#"><span class="font-semibold">50</span>{{__('followers')}}</a></li>
                                <li class="mr-10"><a href="#"><span class="font-semibold">30</span>{{__('following')}}</a></li>
                            </ul>
                            <p class="mb-1 font-black">{{ $profile->name }}</p>
                            <p> {{ $profile->bio}} </p>
                            <p class="text-blue-500"><a href="{{ $profile->url }}">{{$profile->url}} </a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </header>        
    </x-slot>

    <div class="max-w-4xl my-0 mx-auto">
        <hr class="mb-10">
           <div class="grid grid-cols-3 gap-4 mx-0 mt-0 mb-6">
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
               <div class="post">
                   <a href="#" class="w-full h-full">
                       <img src="{{ asset('logo.jpg') }}" alt="" class="w-full h-full object-cover">
                       <div class="post-info">
                           <ul>
                               <li class="inline-block font-semibold mr-7">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Likes:')}}</span>
                                   <i class="fas fa-heart" aria-hidden="true"></i>33
                               </li>
                               <li class="inline-block font-semibold">
                                   <span class="absolute h-1 w-1 overflow-hidden">{{__('Comments:')}}</span>
                                   <i class="fas fa-comment" aria-hidden="true"></i>12
                               </li>
                           </ul>
                       </div>
                   </a>
               </div>
           </div>
    </div>
</x-app-layout>
