<x-app>
    <div class="row w-100  d-flex justify-content-center">
        <div class="col-8 ">
            @auth
                @if(auth()->user()->admin)
                    <a class="btn btn-success mb-3" href={{route('students.create')}}>
                        Add Student
                    </a>
                @endif
                <table class="table table-dark text-white rounded-3 overflow-hidden">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>age</th>
                        <th>residence</th>
                        @if(auth()->user()->admin)
                        <th>Operation</th>
                        @endif
                    </tr>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>
                                {{$student->id}}
                            </td>
                            <td>
                                {{$student->name}}
                            </td>
                            <td>
                                {{$student->age}}
                            </td>
                            <td>
                                {{$student->residence_location}}
                            </td>
                            @if(auth()->user()->admin)
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="mx-2" href={{route('students.edit', $student)}}>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                        </a>
                                        <form method="POST" action={{route('students.destroy', $student)}} class="mx-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endauth
        </div>
    </div>
</x-app>
