<x-app>
    <div class="row d-flex justify-content-center w-100 text-white">
        <div class="col-12 col-md-6 col-lg-4 px-5">
            <h2 class="mb-2">Register</h2>
            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value={{old('email', '')}}>
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="mb-2">
                    Already Registered? <a href={{route('login.index')}}> Login</a>
                </div>
                <button type="submit" class="rounded-2">Register</button>
            </form>
        </div>
    </div>
{{--    <div>--}}
{{--        <div class="card login">--}}
{{--            <h2>Register</h2>--}}
{{--            <form method="POST" action="{{ route('register.post') }}">--}}
{{--                @csrf--}}
{{--                <input type="text" name="email" placeholder="email@gmail.com">--}}
{{--                @if ($errors->has('email'))--}}
{{--                    <span>{{ $errors->first('email') }}</span>--}}
{{--                @endif--}}
{{--                <input type="password" name="password" placeholder="Password">--}}
{{--                @if ($errors->has('email'))--}}
{{--                    <span>{{ $errors->first('password') }}</span>--}}
{{--                @endif--}}
{{--                <button type="submit">Register</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app>
