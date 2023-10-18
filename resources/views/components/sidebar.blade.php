<div class="sidebar" id="sidebar">
    <div class="company-name">
        <h4>Attendify</h4>
    </div>
    <hr class="hr">
    <div class="menu">
        @if (auth()->check())
            @if(auth()->user()->role === '1')
                <a class="menu-items" href="{{asset('/info')}}">
                    <img class="icon" src="{{asset('images/personal-Info.png')}}" alt=""> Personal Info
                </a>
                <a class="menu-items" href="{{asset('/analytics')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Dashboard
                </a>
                <a class="menu-items active" href="{{asset('/home')}}">
                    <img class="icon" src="{{asset('images/home.png')}}" alt=""> Classes</a>
                <a class="menu-items" href="{{asset('/courses')}}">
                    <img class="icon" src="{{asset('images/add.png')}}" alt="">Courses</a>
                <a class="menu-items" href="{{asset('/classlist')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Classlist</a>

                <a class="menu-items" href="{{asset('/attendancelist')}}">
                    <img class="icon" src="{{asset('images/attendanceList.png')}}" alt=""> Attendance List
                </a>

                @elseif(auth()->user()->role === '0')
                <a class="menu-items" href="{{asset('/info')}}">
                    <img class="icon" src="{{asset('images/personal-Info.png')}}" alt=""> Personal Info
                </a>
                <a class="menu-items" href="{{asset('/studentLogs')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Attendance Logs
                </a>
                <a class="menu-items" href="{{asset('/courses')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Courses
                </a>
                @else
                <a class="menu-items" href="{{asset('/info')}}">
                    <img class="icon" src="{{asset('images/personal-Info.png')}}" alt=""> Personal Info
                </a>
                <a class="menu-items" href="{{asset('/analytics')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Dashboard
                </a>
                <a class="menu-items" href="{{asset('/allusers')}}">
                    <img class="icon" src="{{asset('images/allUsers.png')}}" alt=""> All Users
                </a>
                <a class="menu-items" href="{{asset('/classlist')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Student List</a>

                <a class="menu-items" href="{{asset('/faculty')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Faculty & Dpt
                </a>
                <a class="menu-items" href="{{asset('/courseReg')}}">
                    <img class="icon" src="{{asset('images/attendanceList.png')}}" alt=""> Registered Courses
                </a>

            @endif
        @endif
            <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
    </div>
    <div class="close-btn" onclick="toggleSidebar()" >X</div>
</div>
