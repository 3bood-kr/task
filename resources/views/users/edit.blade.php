<x-app>

    <div class="row d-flex justify-content-center w-100 text-white">
        <div class="col-12 col-md-6 col-lg-4 px-5">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                <h3 class="mb-2">Update User</h3>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" class="form-control" >
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
                @if(auth()->user()->admin)
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="admin" class="form-check-input">
                        <label class="form-check-label">Assign Admin Role</label>
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Update User</button>
            </form>
        </div>
    </div>

</x-app>
