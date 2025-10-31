@extends('client.layouts.app')

@section('content')
    <div class="container-lg my-5">
        @foreach ($rooms as $room)
        <div class="h2">
            <span class="text-primary">
                Hotel name:
            </span>
            {{ $hotel->name }}
        </div>
        <div class="mt-4">
            <span class="text-primary">
                City:
            </span>
            {{ $hotel->city->name }}
        </div>
        <div>
            <span class="text-primary">
                Address:
            </span>
            {{ $hotel->address}}
        </div>
        <div>
            <span class="text-primary">
                Email:
            </span>
            {{ $hotel->email }}
        </div>
        <div class="mt-4">
            <span class="text-primary">
                Phone number:
            </span>
            +{{ $hotel->phone }}
        </div>
        <div>
            <span class="text-primary">
                Star:
            </span>
            {{ $hotel->star }}
        </div>
        <div>
            <span class="text-primary">
                Type:
            </span>
            {{ $room->type }}
        </div>
        <div>
            <span class="text-primary">
                Per night price:
            </span>
            {{ $room->per_night_price }}
        </div>
        <div>
            <span class="text-primary">
                Is available:
            </span>
            {{ $room->is_available }}
        </div>
        @endforeach
    </div>
@endsection
