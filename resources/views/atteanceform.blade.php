<x-layout>
    <div class="container d-flex p-4 justify-content-center w-50 border-1">
        <form action="" method="POST" class="w-75">
            @csrf
            <blockquote class="blockquote">
                <p class="mt-6">Attnedance Form</p>
            </blockquote>
            <div class="mb-3">
                <label  class="form-label text-white ">Index Number</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label text-white ">Lecturers Id</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label  class="form-label text-white ">Course Code</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="form-label text-white ">Class Name</label>
                <input type="text" name="classname" class="form-control">
            </div>
            <button type="submit"  name="" class=" text-white btn btn-add">Add</button>
            </form>

    </div>
</x-layout>
