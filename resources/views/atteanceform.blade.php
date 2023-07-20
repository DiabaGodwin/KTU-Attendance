<x-layout>
    <div class="container-flex p-4">
        <form action="" method="POST">
            @csrf
            <blockquote class="blockquote">
                <p class="mt-6">Add Course</p>
            </blockquote>
            <div class="mb-3">
                <label  class="form-label">Full Name</label>
                <input type="text" name="coursename" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="form-label">Index Number</label>
                <input type="text" name="classname" class="form-control">
            </div>
            <button type="submit"  name="" class="btn btn-add">Add</button>
            </form>
        
    </div>
</x-layout>