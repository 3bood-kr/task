<x-app>
    <div class="row d-flex justify-content-center w-100 text-white">
        <div class="col-12 col-md-6 col-lg-4 px-5">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login.post') }}">
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
                </div>
                <div class="mb-2">
                    Don't Have an Account? <a href={{route('register.index')}}> Register</a>
                </div>
                <button type="submit" class="rounded-2">Login</button>
            </form>
        </div>
    </div>

</x-app>
