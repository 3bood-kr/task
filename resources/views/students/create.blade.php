<x-app>

    <div class="row d-flex justify-content-center w-100 text-white">
        <div class="col-12 col-md-6 col-lg-4 px-5">
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <h3 class="mb-2">Add Student</h3>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value={{old('name', '')}}>
                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" value={{old('age', '')}}>
                    @if ($errors->has('age'))
                        <span>{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Residence</label>
                    <input type="text" name="residence_location" class="form-control" value="{{ old('residence_location', '') }}" required>
                    @if ($errors->has('residence_location'))
                        <span>{{ $errors->first('residence_location') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>

</x-app>
