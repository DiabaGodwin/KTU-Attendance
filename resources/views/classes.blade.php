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
            <hr class="hr">
        </div>
            <div class="lesson-section">
            @foreach($lessons as $lesson)
                    <div class="container-flex p-4 lessons">
                        <div class="lesson lesson-border ">
                            <div class="lesson-name">
                                <h4>{{$lesson->courseName}}</h4>
                            </div>
                            <div class="">
                                <a class="lesson-link" href="/qr-interface">Generate</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
    </div>

</x-layout>
