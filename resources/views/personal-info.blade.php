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
        <div class="user-info">
            <div class="">
                Personal Infomation
            </div>
            <div class="personal-info">
                <table class="table table-items table-striped table-borderless" >
                    <tr>
                        <th class="text-white">Name</th>
                        <td class="text-white">
                            @if (auth()->check())
                                {{ auth()->user()->name }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="text-white">User Type</th>
                        <td class="text-white">
                            @if (auth()->check())
                                @if(auth()->user()->role =='0')
                                    Student
                                @elseif(auth()->user()->role =='1')
                                    Lecturer
                                @else
                                    Admin
                                @endif
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th class="text-white">
                            Department
                        </th>
                        <td class="text-white">
                            Computer Sceince
                        </td>
                    </tr>
                    <tr>
                        <th class="text-white">
                            Id Number
                        </th>
                        <td class="text-white">
                            CS 123452
                        </td>
                    </tr>
                    <tr>
                        <th class="text-white">
                            Address
                        </th>
                        <td class="text-white">
                            Adweso Koforidua
                        </td>
                    </tr>
                    <tr>
                        <th class="text-white">
                            Department
                        </th>
                        <td class="text-white">
                            Computer Sceince
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</x-layout>
