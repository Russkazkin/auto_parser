<div>
    <h2>Progress</h2>
    <div wire:poll.750ms="getProgress">
        Current circle: {{ $manufacturer }}
        Current category: {{ $category }}
    </div>
</div>
