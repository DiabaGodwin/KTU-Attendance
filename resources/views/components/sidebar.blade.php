@php

@endphp
<div class="sidebar" id="sidebar">
            <div class="company-name">
                <h4>ATTENDEE</h4>
            </div>
            <hr class="hr">
            <div class="menu">
{{--                @if($role=='1')--}}
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
{{--                    @elseif($role=='0')--}}
                    <a class="menu-items" href="{{asset('/info')}}">
                        <img class="icon" src="{{asset('images/analytics.png')}}" alt=""> Personal Info
                    </a>
{{--                @endif--}}


            </div>

            <div class="close-btn" onclick="toggleSidebar()" >X</div>

</div>
