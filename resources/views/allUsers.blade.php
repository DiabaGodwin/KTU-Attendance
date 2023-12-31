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
            <div class=" d-flex  mb-2">
                <button type="button" class="btn btn-primary mr-3" data-toggle="modal" data-target="#myModal">
                    Add Lecturer
                </button>
                <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#addLecturer">
                    Add Student
                </button>
            </div>
            <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content bg-gray-600">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Add Lecturer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <!-- Your form goes here -->
                            <form action="/addlecture" method="POST" class="text-dark">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Staff id</label>
                                        <input type="text" name="staffId" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <lable>Department</lable>
                                        <select name="department" class="form-select">
                                            @foreach($departments as $department)
                                                <option value="{{$department->departmentName}}">{{$department->departmentName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Faculty</label>
                                        <select name="faculty" class="form-select">
                                            @foreach($faculties as $faculty)
                                                <option value="{{$faculty->facultyName}}">{{$faculty->facultyName}}</option>
                                            @endforeach
                                            <!-- Add other columns as needed -->
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                   il</label>
                                        <label>Ema<input type="text" name="email" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control noroundBorders">
                                    </div>
                                     <div class="col-md-4">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control noroundBorders">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Lecturer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
{{--            End Add Lecturer Modal--}}

{{--            Add student Modal--}}
            <div class="modal fade " id="addLecturer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel">Add Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <!-- Your form goes here -->
                            <form action="/addStudent" method="POST" class="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Student Id</label>
                                        <input type="text" name=studentId" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Department</label>
                                        <select name="department" class="form-select">
                                            @foreach($departments as $department)
                                                <option value="{{$department->departmentName}}">{{$department->departmentName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Faculty</label>
                                        <select name="faculty" class="form-select">
                                            @foreach($faculties as $faculty)
                                                <option value="{{$faculty->facultyName}}">{{$faculty->facultyName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Program</label>
                                        <select name="program" class="form-select">
                                            @foreach($programs as $program)
                                                <option value="{{$program->program}}">{{$program->program}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Level</label>
                                        <select name="level" id="" class="form-select">
                                            <option value="100">100</option>
                                            <option value="200">200</option>
                                            <option value="300">300</option>
                                            <option value="400">400</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-items w-100">
                <div class="d-flex justify-content-center">
                    <h5>ALL USERS</h5>
                </div>
                <div class=" border-1 mt-10 p-3 w-100">
                    <table id="example" class="table table-striped table-borderless text-white">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Id</th>
                                <th scope="col">Email</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit User</th>
                            </tr>
                        </thead>
                        <tbody class="alldata text-white">
                            @foreach($users as $user)
                            <tr>
                                <td class="text-white" scope="row">{{ $counter++ }}</td>
                                <td class="text-white">{{ $user->name }}</td>
                                <td class="text-white">
                                    @if($user->role=="0")
                                        Student
                                    @elseif($user->role=="1")
                                        Lecturer
                                    @else
                                        Admin
                                    @endif
                                </td>
                                <td class="text-white">
                                    @if($user->role=="0")
                                        {{$user->studentId}}
                                    @elseif($user->role=="1")
                                        {{$user->staffId}}
                                    @else
                                        xxxxx
                                    @endif
                                </td>
                                <td class="text-white">{{ $user->email }}</td>
                                <td class="text-white">
                                    <a href="{{url('/delete/'.$user->id)}}" onclick="confirmation(events)" class="btn btn-danger btn-width" type="submit">Delete</a>
                                </td>
                                <td>
                                    <a href="{{url('editUser/'.$user->id)}}" class="btn btn-primary btn-width" type="submit">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="">
        function confirmation(ev){
            ev.preventDefault();
            let urlToRedirect= ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal({
                title:"Are you sure you want to delete this?",
                text:"You won't be able to revert this",
                icon:"warning",
                buttons:true,
                dangerMode:true,
            })
                .then((willCancel)=>
            {
                if(willCancel){
                    window.location.href=urlToRedirect;
                }
            });
        }
    </script>
</x-layout>
