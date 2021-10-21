<div class="max-w-4xl my-0 mx-auto">
    <div class="grid grid-cols-3 gap-4 mx-0 mt-0 mb-0">
        <div>
            <p class="text-center">{{__('original')}}</p>
            <img src="/storage/{{$image_path}}" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(0)">
        </div>
        <div>
            <p class="text-center">{{__('Negative')}}</p>
            <img src="/storage/uploads/1.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(1)">
        </div>
        <div>
            <p class="text-center">{{__('Grayscale')}}</p>
            <img src="/storage/uploads/2.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(2)">
        </div>
        <div>
            <p class="text-center">{{__('filter3')}}</p>
            <img src="/storage/uploads/3.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(3)">
        </div>
        <div>
            <p class="text-center">{{__('filter4')}}</p>
            <img src="/storage/uploads/4.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(4)">
        </div>
        <div>
            <p class="text-center">{{__('filter5')}}</p>
            <img src="/storage/uploads/5.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(5)">
        </div>
        <div>
            <p class="text-center">{{__('filter6')}}</p>
            <img src="/storage/uploads/6.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(6)">
        </div>
        <div>
            <p class="text-center">{{__('filter7')}}</p>
            <img src="/storage/uploads/7.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(7)">
        </div>
        <div>
            <p class="text-center">{{__('filter8')}}</p>
            <img src="/storage/uploads/8.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(8)">
        </div>
        <div>
            <p class="text-center">{{__('filter9')}}</p>
            <img src="/storage/uploads/9.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(9)">
        </div>
        <div>
            <p class="text-center">{{__('filter10')}}</p>
            <img src="/storage/uploads/10.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(10)">
        </div>
        <div>
            <p class="text-center">{{__('filter11')}}</p>
            <img src="/storage/uploads/11.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(11)">
        </div>
        <div>
            <p class="text-center">{{__('filter12')}}</p>
            <img src="/storage/uploads/12.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(12)">
        </div>
        <div>
            <p class="text-center">{{__('filter13')}}</p>
            <img src="/storage/uploads/13.jpeg" alt="" class="w-64 h-64 cursor-pointer" wire:model="filters" wire:click="applyFilter(13)">
        </div>
        
    </div>
</div>
