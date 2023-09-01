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
        <x-profile
            :user-name="auth()->user()->name"
        ></x-profile>
        <div class="">
            @if (auth()->check())
                Welcome, {{ auth()->user()->name }}
            @endif
        </div>
    </div>
</x-layout>
