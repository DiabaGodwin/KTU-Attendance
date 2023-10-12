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
                        Welcome {{ auth()->user()->name }}
                    @endif
                </h3>
            </div>
            <div class="container d-flex w-75 justify-content-lg-around">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add Lecturer
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addLecturer">
                    Add Student
                </button>
            </div>
{{--live search input--}}
            <div class="container d-flex justify-content-center mt-2 ">
                <div class="search">
                    <input type="search" name="search" id="search" placeholder="Search for something" class="w-75 noroundBorders form-control">
                </div>
            </div>
{{--            Search Bar--}}
            <form action="/search/users" method="GET" class="d-flex w-75 mt-3" role="search">
                <select name="column" class="form-select w-25" aria-label="Search By">
                    <option value="name">Name</option>
                    <option value="studentId">Student ID</option>
                    <option value="staffId">Staff ID</option>
                    <option value="email">Email</option>
                    <!-- Add other columns as needed -->
                </select>
                <input class="form-control me-2 noroundBorders" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
{{--            End search bar--}}

{{--            <div class="">--}}
{{--                @if($users->isEmpty())--}}
{{--                    <p>No user Found</p>--}}
{{--                @else--}}
{{--                    @foreach($users as $use)--}}
{{--                        <p>Name:{{$use->staffId}}</p>--}}
{{--                    @endforeach--}}
{{--                @endif--}}
{{--            </div>--}}


            {{--            Add Leturer Modal--}}
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
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Mechanical">Mechanical</option>
                                            <option value="Automotive">Automotive</option>
                                            <!-- Add other columns as needed -->
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Faculty</label>
                                        <select name="faculty" class="form-select">
                                            <option value="FAST">FAST</option>
                                            <option value="FOE">FOE</option>
                                            <option value="FBNE">FBNE</option>
                                            <option value="FBMS">FBMS</option>
                                            <option value="FHAS">FHAS</option>
                                            <!-- Add other columns as needed -->
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control noroundBorders">
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
                                        <input type="text" name="department" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Faculty</label>
                                        <input type="text" name="faculty" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Phone</label>
                                        <input type="tel" name="phone" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Program</label>
                                        <input type="text" name="program" class="form-control noroundBorders">
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
            <div class="table-div">
                <div class="table-overlap">
                    <h5>List Of All Users</h5>
                </div>

                <div class="table-items border-1">
                    <table class="table table-striped table-borderless text-white">
                        <thead>
                        <tbody class="alldata">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Role</th>
                            <th scope="col">Email</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Change Role</th>
                        </tr>
                        </thead>

                        @foreach($users as $user)

                            <tr>
                                <th scope="row">{{ $counter++ }}</th>
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
                        <tbody id="Content" class="searchdata"> </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup', function()
        {
            $value =$(this).val();
            if($value){
                $('.alldata').hide();
                $('.searchdata').show();
            }
            else{
                $('.alldata').show();
                $('.searchdata').hide();
            }
            $.ajax({
                type:'get',
                url:'{{URL::to('search')}}',
                data:{'search':$value},
                success:function(data){
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    </script>
</x-layout>
