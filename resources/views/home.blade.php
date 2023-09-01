
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

    <x-sidebar></x-sidebar>
    <h3 class="class-head">Home</h3>
        <x-profile
            :user-name="auth()->user()->name"
        ></x-profile>
    <!-- <div class="content"> -->
        <hr>
    <div class="active-classes">
            <h3 class="class-head">Active Classes</h3>
            <div class="actv-cls">
                <div class="course">African Studies</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links"  href="{{ url('/qr-interface') }}"> Start Class</a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course">Comunication Skills</div>
                <div class="status">
                    <h3 class="btn-click" ><a class="links"  href="{{ url('/qr-interface') }}"> Start Class</a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course">Research Method</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links"  href="{{ url('/qr-interface') }}"> Start Class</a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course"> Java</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links"  href="{{ url('/qr-interface') }}"> Start Class</a></h3>
                </div>

            </div>
            <!-- previous class -->
            <div class="previous-classes">
            <h3 class="class-head">Previous Classes</h3>
            <div class="actv-cls">
                <div class="course">African Studies</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links" href="{{ url('/dashboard') }}"> Attendance </a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course">Communication Skills</div>
                <div class="status">
                    <h3 class="btn-click" ><a class="links" href="{{ url('/dashboard') }}"> Attendance </a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course">Research Method</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links" href="{{ url('/dashboard') }}"> Attendance </a></h3>
                </div>

            </div>
            <div class="actv-cls">
                <div class="course">Programming with Java</div>
                <div class="status">
                    <h3 class="btn-click"><a class="links" href="{{ url('/dashboard') }}"> Attendance </a></h3>
                </div>

            </div>
        </div>
    </div>
    </div>


</x-layout>

