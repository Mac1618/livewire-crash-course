<div class="w-full p-4">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit='create' class="w-full flex flex-col items-start space-y-4">
        
        {{-- counts --}}
        <input class="p-1 w-10/12 border-black border rounded" required  wire:model='counts' type="number" placeholder="Number of birds..." />
        @error('counts')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror
        
        {{-- birds --}}
        <textarea class="p-1 w-10/12 border-black border rounded" required rows="8" wire:model='birds'></textarea>
        @error('birds')
            <p class="text-red-500 font-semibold">{{ $message }}</p>
        @enderror

        {{-- submit btn --}}
        <button class="text-white px-4 py-1 font-bold bg-blue-500 rounded hover:bg-blue-200 hover:text-black" type="submit">Create</button>
    </form>

    {{-- map from db --}}
        <ul>
            @foreach ($datas as $data)
                <li class="space-y-3" wire:key='{{ $data->id }}' wire:transition>
                    <span>{{$data->bird}}</span>
                    <button wire:click='delete({{ $data }})' class="text-red-500 border-red-500 hover:bg-red-100 px-2 py-1 border rounded">delete</button>
                </li>
            @endforeach
        </ul>
</div>
