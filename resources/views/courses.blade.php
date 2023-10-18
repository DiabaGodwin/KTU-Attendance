<x-layout>
    <!-- <div class="outline"> -->
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
        <div class="sidebar-hr">
            <hr class="hr">
        </div>
        <div class="container-flex p-4 ">
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#registerCourse">
               Register Courses
            </button>
            <div class="table-items w-100">
                <div class="d-flex justify-content-center">
                    <h5>REGISTERED COURSES</h5>

                </div>
                <div class=" border-1 mt-10 p-3 w-100">
                    <table id="registered" class="table table-striped table-borderless text-white">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CourseCode</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @isset($registeredCourses)--}}

                        @if(auth()->user()->role == '1')
                            @foreach($registeredCourses as $registered)
                                <tr>
                                    <td class="text-white">{{$counter++}}</td>
                                    <td class="text-white">{{$registered->courseCode}}</td>
                                    <td class="text-white">{{$registered->courseName}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Update</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-width">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @elseif(auth()->user()->role == '0')
                            @foreach($studentCourses as $studentCourse)
                                <tr>
                                    <td class="text-white">{{$counter++}}</td>
                                    <td class="text-white">{{$studentCourse->courseCode}}</td>
                                    <td class="text-white">{{$studentCourse->courseName}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary">Update</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-width">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

{{--                        @endisset--}}
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal fade " id="registerCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content bg-gray-600">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Add Lecturer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">
                            <!-- Your form goes here -->
                            <form action="/registerCourse" method="POST" class="text-dark">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Course</label>
                                        <select name="courseCode" id="" class="form-select">
                                            @foreach($courses as $course)
                                            <option value="{{$course->courseCode}}">{{$course->courseCode}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Staff id</label>
                                        <input type="text" value="{{auth()->user()->staffId}}" name="staffId" class="form-control noroundBorders">
                                    </div>
                                    <div class="col-md-4">
                                        <lable>Student Id</lable>
                                        <input type="text" value="{{auth()->user()->studentId}}" name="studentId" class="form-control noroundBorders">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- </div> -->
</x-layout>
