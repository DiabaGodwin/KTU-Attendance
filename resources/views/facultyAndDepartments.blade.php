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
                        <h5>FACULTIES</h5>
                    </div>
                    <table class="table table-striped table-borderless " id="faculty">
                        <thead class="text-white">
{{--                        <tbody class="alldata">--}}
                        <tr class="text-white">
                            <th scope="col">ID</th>
                            <th scope="col">Faculty</th>
                            <th scope="col">HOD</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                        </thead>
                        <tbody >
                        @foreach($faculties as $faculty)
                            <tr class="text-white">
                                <th class="text-white " scope="row">{{ $faculty->id }}</th>
                                <td class="text-white ">{{ $faculty->facultyName }}</td>
                                <td class="text-white ">{{ $faculty->facultyHod }}</td>
                                <td class="text-white ">
                                    <button class="btn btn-danger btn-width" type="submit">Delete</button>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-width" type="submit">Update</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row  mt-3 w-100">
                <div class="col lect-bg">
                    <div class="d-flex justify-content-center">
                        <h5>DEPARTMENTS</h5>
                    </div>
                    <table class="table table-striped table-borderless" id="depart">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Faculty</th>
                                <th>HOD</th>
                                <th>Delete</th>
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{$department->id}}</td>
                                <td>{{$department->departmentCode}}</td>
                                <td>{{$department->departmentName}}</td>
                                <td>{{$department->facultyCode}}</td>
                                <td>{{$department->departmentHod}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-width">Delete</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-width">Update</a>
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
