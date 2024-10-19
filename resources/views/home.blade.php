<x-app>
    <div class="row w-100  d-flex justify-content-center">
        <div class="col-8 text-white">
            @guest
                <h2>You are not logged in!. Please <a class="btn btn-success" href="{{ route('login.index') }}">Login</a> to Start Using the app</h2>
            @endguest

            @auth
                <div>
                    <h2 class="mb-3">Welcome back {{auth()->user()->name}}.</h2>
                    <div class="d-flex">
                        <a class="btn btn-primary mb-3 me-3" href={{route('students.index')}}>
                            @if(auth()->user()->admin)
                                Manage Students
                            @else
                                Show Students
                            @endif
                        </a>
                        <a class="btn btn-secondary mb-3" href={{route('users.index')}}>Manage Users</a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
</x-app>
