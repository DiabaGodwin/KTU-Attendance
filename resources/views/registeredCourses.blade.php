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
        <div class="user-info table-div ">
            <div class="">
                <h3 class="text-white">
                    @if (auth()->check())
                        Welcome {{ auth()->user()->name }}
                    @endif
                </h3>
            </div>
            <div class="d-flex row w-100 " >
                <div class="col lect-bg  p-3">
                    <div class="d-flex justify-content-center">
                        <h5>REGISTERED COURSES</h5>
                    </div>
                    <table class="table table-striped table-borderless " id="registered">
                        <thead class="text-white">
                        <tr class="text-white">
                            <th scope="col">ID</th>
                            <th scope="col">Course</th>
                            <th scope="col">Student ID</th>
                            <th scope="col">Staff ID</th>
                            <th scope="col">Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach($registeredCourse as $registered)
                            <tr>
                                <td class="text-white">{{$counter++}}</td>
                                <td class="text-white">{{$registered->courseCode}}</td>
                                <td class="text-white">{{$registered->studentId}}</td>
                                <td class="text-white">{{$registered->staffId}}</td>
                                <td>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary">Update</a>
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
