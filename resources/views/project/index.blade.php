@extends('admin-theme._master')

@section('judul', 'project')

@section('isi')

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">Project</div>
                <div class="card-body">
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>author</th>
                                <th>title</th>
                                <th>body</th>
                                <th>keyword</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                         @foreach($projects as $project)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $projects->author }}</td>
                                <td>{{ $projects->title }}</td>
                                <td>{{ $projects->body }}</td>
                                <td>{{ $projects->keyword }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection