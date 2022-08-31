@extends('index')

@section('content')
   <div class="container">
        <div class="row mt-5">
            <h3>Edit Todo</h3>
        </div>
        <div class="row">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Todo</label>
                  <input type="text" class="form-control" id="todo" aria-describedby="todo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Todo</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="completed">Completed</option>
                        <option value="not_started">Not Started</option>
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
   </div>
@endsection