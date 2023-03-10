@extends('master_layout.layout')
@section('title', 'Students_Lists')
@section('content')

<table class="table">
    <h1>Students List</h1>
    <thead>
      <tr>
        <th scope="col">Student ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Middle Name</th>
        <th scope="col">Age</th>
        <th scope="col">Course ID</th>
      </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
<tr>
  <td>{{$student->student_id}}</td> {{--student_id and etc. are fields--}}
  <td>{{$student->first_name}}</td>
  <td>{{$student->last_name}}</td>
  <td>{{$student->middle_name}}</td>
  <td>{{$student->age}}</td>
  <td>{{$student->course_code}}</td>
</tr>
@endforeach
    </tbody>
  </table>
@endsection