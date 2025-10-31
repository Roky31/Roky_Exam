@extends('client.layouts.app')

@section('content')
    <div class="container-lg">
        <div class="h3 fw-bold text-primary mt-5">
            Cities:
            <span class="typed h3 text-dark" data-typed-items="
                @foreach ($cities as $city)
                    {{ $city->name . ', ' }}
                @endforeach
                ">
            </span>
            <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
            <script>
                const selectTyped = document.querySelector('.typed');
                if (selectTyped) {
                    let typed_strings = selectTyped.getAttribute('data-typed-items');
                    typed_strings = typed_strings.split(',');
                    new Typed('.typed', {
                        strings: typed_strings,
                        loop: true,
                        typeSpeed: 100,
                        backSpeed: 50,
                        backDelay: 2000
                    });
                }
            </script>

        </div>

        <div class="h3 fw-bold text-primary mt-5">
            hotels
        </div>
        <div class="row mb-5">
            <div class="col-3">
                <form action="{{ route('search') }}" method="get" class="me-3">
                    <label for="city" class="form-label mt-3">city: </label><br>
                    <select class="form-select" name="cityId" id="city">
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    <div class="d-flex mt-4">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                        <a href="{{ route('search') }}" class="btn btn-secondary ms-2 w-100">Reset</a>
                    </div>
                </form>
            </div>
            <div class="col-9">
                <div class="row row-cols-4 g-3">
                    @foreach ($hotels as $hotel)
                        <div class="col">
                            <div class="border rounded-3 h-100 p-4">
                                <a class="text-decoration-none h5" href="{{ route('client.searchs.show',['hotelName' => $hotel->name]) }}">
                                    <span class="fw-bold">Name: </span> {{ $hotel->name }}
                                </a>
                                <div class="text-primary">
                                    <span class="fw-bold">city: </span> {{ $hotel->city->name}}
                                </div>
                                 <div class="h5">
                                    <span class="fw-bold">Address: </span> {{ $hotel->address }}
                                </div>
                                <div class="text-primary">
                                    <span class="fw-bold">Email: </span> {{ $hotel->email}}
                                </div>
                                 <div class="h5">
                                    <span class="fw-bold">Phone: +</span> {{ $hotel->phone }}
                                </div>
                                <div class="text-primary">
                                    <span class="fw-bold">Star: </span> {{ $hotel->star}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
