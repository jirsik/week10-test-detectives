@extends('layouts/layout')

@section('content')
<div class="page page-detective">

    <h1>The detectives list</h1>
    @if (count($detectives)>0)
        <ul>
            @foreach ($detectives as $detective)
                <li>{{$detective->name}}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection
