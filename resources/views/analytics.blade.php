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
        @if(auth()->check())
            @if(auth()->user()->role == '2')
                <div class="tags-section">
                    <div class="tag">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Users</div>
                                        <div class="h5 mb-0 font-weight-bold text-black-50">
                                            {{count($users)}}
                                        </div>
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
                                        <div class="h5 mb-0 font-weight-bold text-black-50">{{ $users->where('role', '0')->count() }}</div>
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
                                            Total Lectures
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-black-50">{{ $users->where('role', '2')->count() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="tags-section">
                    <div class="tag">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Students</div>
                                        <div class="h5 mb-0 font-weight-bold text-black-50">
                                            {{$users->where('role', '0')->count()}}
                                        </div>
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
                                            Total Attendance
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-black-50">
{{--                                            {{ count($attendance) }}--}}
                                            99
                                        </div>
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
                                            Total Lectures
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-black-50">{{ $users->where('role', '2')->count() }}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif

        <div class=" d-flex ">

            <div class="col all-programs mt-3 p-3">
                @if(auth()->user()->role == '2')
                <div class="d-flex programs justify-content-center text-dark">
                    <h5>PROGRAMS</h5>
                </div>
                <div class="">
                    <table id="programs" class="table table-striped table-borderless text-dark">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Program</th>
                            <th>Faculty</th>
                            <th>Department</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($programs as $program)
                            <tr>
                                <td>{{$program->id}}</td>
                                <td>{{$program->program}}</td>
                                <td>{{$program->facultyCode}}</td>
                                <td>{{$program->departmentCode}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-width">Delete</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary btn-width">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @elseif(auth()->user()->role == '1')
                    <h3 class="text-dark" > Display Attendance</h3>
                @endif
            </div>

{{--            <div class="graph"></div>--}}
        </div>
          <div class="row">
              <div class="col-12">
                  <div class="bar-chart w-100">
                      <canvas id="myChart"></canvas>
                  </div>
              </div>
          </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['Programs', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Green', 'Purple', 'Orange'],
                        datasets: [{
                            label: '# of Votes',
                            data: [{{count($programs)}}, 1, 1, 1, 1, 1, 1,1,1],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
    </div>
    </div>
</x-layout>
