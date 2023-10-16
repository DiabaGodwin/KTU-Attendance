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
                <a class="menu-items active" href="{{asset('/home')}}">
                    <img class="icon" src="{{asset('images/home.png')}}" alt=""> Home</a>
                <a class="menu-items" href="{{asset('/addCourses')}}">
                    <img class="icon" src="{{asset('images/add.png')}}" alt=""> Add Courses</a>
                <a class="menu-items" href="{{asset('/classes')}}">
                    <img class="icon" src="{{asset('images/classes.png')}}" alt=""> Classes</a>
                <a class="menu-items" href="{{asset('/classlist')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Classlist</a>
                <a class="menu-items" href="{{asset('/analytics')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Analytics
                </a>
                <a class="menu-items" href="{{asset('/attendancelist')}}">
                    <img class="icon" src="{{asset('images/attendanceList.png')}}" alt=""> Attendance List
                </a>
                @elseif(auth()->user()->role === '0')
                <a class="menu-items" href="{{asset('/info')}}">
                    <img class="icon" src="{{asset('images/personal-Info.png')}}" alt=""> Personal Info
                </a>
                <a class="menu-items" href="{{asset('/classlist')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Classlist</a>
                @else
                <a class="menu-items" href="{{asset('/info')}}">
                    <img class="icon" src="{{asset('images/personal-Info.png')}}" alt=""> Personal Info
                </a>
                <a class="menu-items" href="{{asset('/allusers')}}">
                    <img class="icon" src="{{asset('images/allUsers.png')}}" alt=""> All Users
                </a>
                <a class="menu-items" href="{{asset('/classlist')}}">
                    <img class="icon" src="{{asset('images/list.png')}}" alt=""> Classlist</a>
                <a class="menu-items" href="{{asset('/analytics')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Analytics
                </a>
                <a class="menu-items" href="{{asset('/faculty')}}">
                    <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Faculty & Dpt
                </a>

            @endif
        @endif
    </div>
    <div class="close-btn" onclick="toggleSidebar()" >X</div>
</div>
