<x-app>

    <div class="row d-flex justify-content-center w-100 text-white">
        <div class="col-6">
            <form method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">ID</label>
                    <div class="form-text">{{$student->id}}</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}">                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" value={{old('age', $student->age)}}>
                    @if ($errors->has('age'))
                        <span>{{ $errors->first('age') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Residence</label>
                    <input type="text" name="residence_location" class="form-control" value="{{ old('residence_location', $student->residence_location) }}" required>
                    @if ($errors->has('residence_location'))
                        <span>{{ $errors->first('residence_location') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</x-app>
