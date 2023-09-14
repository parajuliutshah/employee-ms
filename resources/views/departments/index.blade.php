@extends('dashboard.layout')
@section('main')
    <div class="d-sm-flex align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-900">Department</h1>
    </div>
    <table class="table table-light table-striped mt-4 text-gray-900">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col" aria-sort="ascending">Department Name</th>
{{--            <th scope="col">Action</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($data as $department)
            <tr>
                <th>{{$department['id']}}</th>
                <td>{{$department['name']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data->links()}}

@endsection
