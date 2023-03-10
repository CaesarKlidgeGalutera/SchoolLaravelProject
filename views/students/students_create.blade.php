@extends('master_layout.layout')
@section('title','Student Form')
@section('content')

<form action="{{route('students.store')}}" method="POST">
    @csrf
    Student_Id: <input type="text"  name="student_id" class="form-control">
    First Name: <input type="text" name="first_name" id="" class="form-control">
    Last Name: <input type="text" name="last_name" class="form-control">
    Middle Name: <input type="text" name="middle_name" class="form-control">
    Age: <input type="number" name="age" id="" class="form-control">
    Course: 
    <label for="Course Code" class="form-label">
        <select id="CourseCode" class="form-select" name="course_code">
           @foreach ($courses as $course)
                <option value="{{$course->id}}">{{$course->course_code}}</option>
           @endforeach
        </select>
    </label>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection