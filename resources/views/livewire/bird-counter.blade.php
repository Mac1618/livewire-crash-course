<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <form wire:submit='create' class="flex flex-col items-start">
        <input required wire:model='counts' type="number" placeholder="Number of birds..." />
        <textarea required wire:model='birds' name="" cols="30" rows="10"></textarea>
        <button class="font-bold" type="submit">Create</button>
    </form>

    <ul>
        @foreach ($datas as $data)
            <li>{{$data->bird}}</li>
        @endforeach
    </ul>
    
</div>
