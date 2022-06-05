@extends('layout')

@section('content')

    <h1>PEOPLE</h1>

    <!--
        <ul>
            <li><a href="/">Welcome</a></li>
            <li><a href="hi">Hi</a></li>
            <li><a href="people">People</a></li>
            <li><a href="bye">Bye</a></li>
        </ul>
    -->

    <ul>

        <?php
            foreach ($peoples_list as $people)
            {
                echo '<li>'.$people.'</li>';
            } 
        ?>

    </ul>



    <ul>
        @foreach ($peoples_list as $people)
        <li>{{$people}}</li>
        @endforeach

    </ul>

@endsection

