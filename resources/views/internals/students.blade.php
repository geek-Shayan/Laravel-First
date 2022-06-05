@extends('layout')

@section('content')
<h1>STUDENTS</h1>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>city</th>
            <th>country</th>
        </tr>

        {{-- @foreach ($students as $student)
        <tr>
             <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->country}}</td>
        </tr>
        @endforeach --}}

        {{-- <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->country}}</td>
        </tr>
         --}}
    </table>
@endsection