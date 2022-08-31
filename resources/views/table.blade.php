@extends('index')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Todos</h4>
                        <a href="Add.html" role="button" class="btn btn-primary">
                            Add Todo
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Todo</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Create a website</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Create a music</td>
                                <td>Completed</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Create a dance steps</td>
                                <td>Not Started</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection