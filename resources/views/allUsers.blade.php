<x-layout>
    <div class="main-container">
        <div class="side-logo">
            <div class="toggle-btn" onclick="toggleSidebar()">
                ☰
            </div>
            <div class="company-name-main">
                <h3>ATTENDEE</h3>
            </div>

        </div>
        <x-sidebar
            :role="auth()->user()->role">
        </x-sidebar>
        <div class="user-info table-div">
            <div class="">
                <h3>
                    @if (auth()->check())
                        Welcome, {{ auth()->user()->name }}
                    @endif
                </h3>
            </div>
            <div class="table-div">
                <div class="table-overlap">
                    <h5>List Of All Users</h5>
                </div>

                <div class="table-items border-1">
                    <table class="table table-stripped table-borderless ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Change Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if($user->role=="0")
                                        Student
                                    @elseif($user->role=="1")
                                        Lecturer
                                    @else
                                        Admin
                                    @endif
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Delete Account</button>                            </td>
                                <td>
                                    <button class="btn btn-primary" type="submit">Change Role</button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-layout>
