
<x-layout>
<div class="list-container list-bg">
{{--    <div class="content">--}}
{{--    <x-profile></x-profile>--}}
{{--    <div class="">--}}
    <hr>
</div>
    <div class="">
        <table class="table m-2">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Program</th>
            <th scope="col">index</th>
            <th scope="col">Attend</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lists as $list)
            <form class="list" action="/attendclass" method="POST">
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
        </tbody>
        </table>
    </div>
</x-layout>
