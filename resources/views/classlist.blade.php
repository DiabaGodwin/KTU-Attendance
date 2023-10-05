
<x-layout>
<div class="list-container list-bg">
    <x-sidebar
        :role="auth()->user()->role">
    </x-sidebar>    <hr>
</div>
    <div class="main-container">
        <div class="">
            <h3>
                @if (auth()->check())
                    Welcome, {{ auth()->user()->name }}
                @endif
            </h3>
        </div>
        <div class="table-div">
            <div class="table-overlap">
                <h5>List of Student</h5>
            </div>
            <div class="table-items">
                <table class="table m-2">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Program</th>
                        <th scope="col">index</th>
                        @if(auth()->user()->role=='0')
                            <th scope="col">Attend</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @if(auth()->user()->role=='2' || auth()->user()->role=='1')
                        @foreach($lists as $list)
                            <tr>
                                <th scope="row" class="one">{{$list->id}}</th>
                                <td>{{$list->firstName}}</td>
                                <td>{{$list->lastName}}</td>
                                <td>{{$list->program}}</td>
                                <td>{{$list->indexNumber}}</td>
                            </tr>
                        @endforeach
                    @elseif(auth()->user()->role=='0')
                        @foreach($lists as $list)
                            <form  action="/attendclass" method="POST">
                                @csrf
                                <tr>
                                    <th scope="row" class="one">{{$list->id}}</th>
                                    <td><input class="list-input two" type="text" name="firstname" value="{{$list->firstName}}"></td>
                                    <td><input class="list-input three" type="text" name="lastname" value="{{$list->lastName}}"></td>
                                    <td><input class="list-input four" type="text" name="program" value="{{$list->program}}"></td>
                                    <td><input class="list-input four" type="text" name="index" value="{{$list->indexNumber}}"></td>
                                    <td><button class="list-input " type="submit" name="" id="">Join</button></td>
                                </tr>
                            </form>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</x-layout>
