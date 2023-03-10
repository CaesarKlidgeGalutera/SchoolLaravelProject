@extends('master_layout.layout')
@section('title', 'Department')
@section('content')

<table class="table">
    <h1>Department List</h1>
    <thead>
      <tr>
        <th scope="col">Department</th>
        <th scope="col">Description</th>
      </tr>
    </thead>
    @foreach($departments as $department)
    <tbody>
<tr>
  <td>{{$department->department}}</td>
      <td>{{$department->desc}}</td>
</tr>   
      @endforeach
    </tbody>
  </table>
@endsection