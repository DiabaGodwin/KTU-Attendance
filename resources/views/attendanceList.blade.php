<x-layout>
    <x-sidebar
        :role="auth()->user()->role">
    </x-sidebar>

    <div class="main-container">
        <x-profile
            :user-name="auth()->user()->name"
        ></x-profile>
        <div class="p-3 w-100 table-items">
            <div class="d-flex justify-content-center">
                <h5>ATTENDANCE LIST</h5>
            </div>
            <table class="table  table-striped table-borderless w-100" id="attendance">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course</th>
                    <th scope="col">Lecturer</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Time/Date</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <th class="text-white" scope="row">{{$counter++}}</th>
                        <td class="text-white">{{$list->courseCode}}</td>
                        <td class="text-white">{{$list->staffId}}</td>
                        <td class="text-white">{{$list->studentId}}</td>
                        <td class="text-white">{{$list->created_at}}</td>
                        <td class="text-white">
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
