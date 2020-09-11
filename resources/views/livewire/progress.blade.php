@php
$count = $count ?: 9600;
@endphp
<div>
    <h2>Progress</h2>
    <div wire:poll.750ms="getProgress">
        Target count: {{ $count }}
        Current cars in a base: {{ $progress }}
    </div>
    <div class="shadow w-full bg-grey-light">
        <div class="bg-blue-400 text-xs leading-none py-1 text-center text-white" style="width: {{ $progress / $count * 100 }}%">{{ $progress / $count * 100 }}%</div>
    </div>
    <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" style="width: {{ $progress / $count * 100 }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="{{ $count }}"></div>
    </div>
</div>
