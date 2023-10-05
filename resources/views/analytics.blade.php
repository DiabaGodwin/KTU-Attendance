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
        ></x-profile>    <hr>
        <div class="title">
            <h2>Dashboard</h2>
        </div>
    <div class="">
        <div class="tags-section">
            <div class="tag">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Users</div>
                                <div class="h5 mb-0 font-weight-bold text-black-50">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tag">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Students
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-black-50">{{$count}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tag">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Students
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-black-50">$40,000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="big-graphs">
            <div class="graph"></div>
            <div class="graph"></div>
        </div>
        <div class="bar-chart">

        </div>
        <div class="" id="myChart"></div>
    </div>
    </div>
</x-layout>
