<x-layout>
    <x-sidebar
        :role="auth()->user()->role">
    </x-sidebar>

    <div class="main-container">
        <x-profile
            :user-name="auth()->user()->name"
        ></x-profile>
        <div class="table-div">
            <div class="table-overlap">
                <h5>Attendance List</h5>
            </div>
            <table class="table table-items table-striped table-borderless">
                <thead>
                <tr>
                    <th scope="col">Fist Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Index No</th>
                    <th scope="col">Date/Time</th>
                    <th scope="col">Course ID</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lists as $list)
                    <tr>
                        <th class="text-white" scope="row">{{$list->firstname}}</th>
                        <td class="text-white">{{$list->lastname}}</td>
                        <td class="text-white">{{$list->indexNumber}}</td>
                        <td class="text-white">{{$list->created_at}}</td>
                        <td class="text-white"></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
