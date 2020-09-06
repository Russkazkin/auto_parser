<div>
    <h1>livewire component</h1>
    <div wire:loading>
        Processing Payment...
    </div>
    <div wire:loading.remove style="display: none">
        Hide Me While Loading...
    </div>
    <button class="btn btn-success" wire:click="getManufacturers">Get Manufacturers</button>
</div>
