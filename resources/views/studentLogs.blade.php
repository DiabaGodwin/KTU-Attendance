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
        <x-profile
            :user-name="auth()->user()->name"
        ></x-profile>
        <div class="">
            <h4>Attendance Page</h4>
        </div>
        <div class="table-items w-100">
            <div class="d-flex justify-content-center">
                <h5>ATTENDANCE LOGS</h5>
            </div>
            <div class=" border-1 mt-10 p-3 w-100">
                <table id="studentlog" class="table table-striped table-borderless text-white">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Venue</th>
                        <th scope="col">Date</th>
                        <th scope="col">Lecturer</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit User</th>
                    </tr>
                    </thead>
                    <tbody class="alldata text-white">
                    @foreach($studentAttends as $attend)
                        <tr>
                            <td class="text-white">{{$counter++}}</td>
                            <td class="text-white">{{$attend->courseCode}}</td>
                            <td class="text-white">{{$attend->venue}}</td>
                            <td class="text-white">{{$attend->created_at}}</td>
                            <td class="text-white">{{$attend->staffId}}</td>
                            <td class="text-white">
                                <a href="" onclick="confirmation(events)" class="btn btn-danger btn-width" type="submit">Delete</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-width" type="submit">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
{{--        <div class="">--}}
{{--            @foreach($studentAttends as $attend)--}}
{{--                <h5 class="text-white">You joined {{$attend->courseName}} at {{$attend->venue}} on the {{$attend->created_at}} by {{$attend->name}}</h5>--}}
{{--            @endforeach--}}
{{--        </div>--}}
    </div>
</x-layout>
