<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriWeb</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    @include('client.alert.app')
    <div class="container-xxl">
        <div class="d-flex align-items-center justify-content-center vh-100">

            <form action="{{ route('register') }}" method="post" class="col-10 col-md-8 col-lg-6 col-xl-4">
                <div class="h2 fw-bold text-center mb-5">Register</div>
                @csrf
                <div class="w-100  mt-3">
                    <label for="firstname" class="h6 form-label">firstname<span class="text-danger">*</span> </label>
                    <input type="text" class="form-control @error("firstname") border-danger @enderror" name="firstname" id="firstname"
                        value="{{ old('firstname') }}">
                    @error('firstname')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="w-100 mt-3">
                    <label for="lastname" class="h6 form-label">lastname </label>
                    <input type="text" class="form-control @error("lastname") border-danger @enderror" name="lastname"
                        id="lastname" value="{{ old('lastname') }}">
                    @error('lastname')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="w-100 mt-3">
                    <label for="username" class="h6 form-label">Username<span class="text-danger">*</span> </label>
                    <input type="text" class="form-control @error("username") border-danger @enderror" name="username"
                        id="username" value="{{ old('username') }}">

                    @error('username')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="w-100 mt-3">
                    <label for="password" class="h6 form-label">Password<span class="text-danger">*</span> </label>
                    <input type="password" id="password @error("password") border-danger @enderror" name="password"
                        class="form-control">
                    @error('password')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="w-100 mt-3">
                    <label for="password_confirmation" class="h6 form-label">PasswordConfirmation<span
                            class="text-danger">*</span> </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="form-control  @error("password_confirmation") border-danger @enderror">
                    @error('password_confirmation')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success w-100 mt-4">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>