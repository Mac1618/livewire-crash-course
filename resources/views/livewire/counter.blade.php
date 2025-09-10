<div>
    {{-- display state --}}
    <p>Counte: 
        <strong>{{ $count }}</strong>
    </p>

    {{-- onClick --}}
    {{-- model.live: request every change --}}
    {{-- mode.blur: request only when out of focus elements --}}
    <input type="number" wire:model.blur='number'>
    <button wire:click='incrementCount({{ $number }})'>Increase Count +</button>
</div>
