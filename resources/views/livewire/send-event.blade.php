<div class="mb-10 ">
    <h3 class="text-3xl mb-4">Let's send a message</h3>

    <input wire:model.blur='message' class="border border-black p-1 rounded-md" type="text">
    <button
        class="bg-blue-500 text-white rounded px-3 py-1 hover:bg-blue-200" 
        wire:click='sendMessage'>
            send
    </button>
    
    <button
        class="bg-yellow-500 text-white rounded px-3 py-1 hover:bg-yellow-200" 
        wire:click='resetMessage'>
            reset
    </button>
</div>
  