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
            <form action="/courses" method="POST">
                @csrf
                <blockquote class="blockquote">
                    <p class="mt-6">Add Course</p>
                </blockquote>
                <div class="mb-3">
                    <label  class="form-label">Course Name</label>
                    <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label  class="form-label">Course Code</label>
                    <input type="text" name="coursecode" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="form-label">Class Name</label>
                    <input type="text" name="classname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="form-label">Credit Hours</label>
                    <input type="text" name="credithours" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="datetime">Set date and time</label>
                    <input type="datetime-local" id="datetime" name="datetime">
                </div>
                <button type="submit" name="" class="btn btn-add">Add</button>
            </form>
        </div>
    </div>
    <!-- </div> -->
</x-layout>
