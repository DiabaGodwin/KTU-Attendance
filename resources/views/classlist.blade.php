
<x-layout>
<div class="list-container list-bg">
    <x-sidebar
        :role="auth()->user()->role">
    </x-sidebar>    <hr>
</div>
    <div class="main-container">
        <div class="">
            <h3>
                @if (auth()->check())
                    Welcome, {{ auth()->user()->name }}
                @endif
            </h3>
        </div>
        <div class="table-items">
            <div class="d-flex justify-content-center">
                <h5>List of Student</h5>
            </div>
            <div class=" p-3">
                <table class="table m-2 table-striped table-borderless" id="student">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Program</th>
                        <th scope="col">Department</th>
                        <th scope="col">Index No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td class="text-white">{{$counter++}}</td>
                            <td class="text-white">{{$student->name}}</td>
                            <td class="text-white">{{$student->program}}</td>
                            <td class="text-white">{{$student->department}}</td>
                            <td class="text-white">{{$student->studentId}}</td>
                            <td class="text-white">{{$student->email}}</td>
                            <td class="text-white">{{$student->level}}</td>
                            <td>
                                <a href="" class="btn btn-danger btn-width">Delete</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-width">Edit</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</x-layout>
