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
        <div class="user-info table-div ">
            <div class="">
                <h3 class="text-white">
                    @if (auth()->check())
                        Welcome {{ auth()->user()->name }}
                    @endif
                </h3>
            </div>
            <div class="d-flex row w-100 " >
                <div class="col lect-bg  p-3">
                    <form action="{{url('updateUser/'.$user->id)}}" method="POST" class="text-dark">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <label>Name</label>
                                <input type="text" value="{{$user->name}}" name="name" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Staff id</label>
                                <input type="text" value="{{$user->staffId}}" name="staffId" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Student ID</label>
                                <input type="text" value="{{$user->studentId}}" name="staffId" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <lable>Department</lable>
                                <select name="department" class="form-select">
                                        <option value="{{$user->department}}">{{$user->department}}</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>Program</lable>
                                <select name="program" class="form-select">
                                    <option value="{{$user->program}}">{{$user->program}}</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Faculty</label>
                                <select name="faculty" class="form-select">
                                        <option value="{{$user->faculty}}">{{$user->faculty}}</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Phone</label>
                                <input type="tel" name="phone" value="{{$user->phone}}" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Role</label>
                                <input type="text" name="email" value="{{$user->role}}" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Level</label>
                                <input type="text" name="email" value="{{$user->level}}" class="form-control noroundBorders">
                            </div>
                            <div class="col-md-4">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$user->address}}" class="form-control noroundBorders">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
