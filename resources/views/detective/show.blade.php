@extends('layouts/layout')

@section('content')
<div class="page page-detective">

    <section class="info">

        <img class="portrait" src="{{ asset('img/'.$detective->slug.'.jpg') }}" alt="">

        <div class="data">
            <h1>{{ $detective->name }}</h1>

            <div class="story">
                {!! nl2br($detective->story) !!}
            </div>
        </div>

        <div class="service">
            <h2>Availability</h2>
            From {{ date('g:i A', strtotime($detective->available_from)) }} to {{ date('g:i A', strtotime($detective->available_until)) }}.

            <div class="status unavailable">Current status: <span>Not available</span></div>
        </div>

    </section>

    <section class="detective-assign">
        <h2>Hire a detective</h2>

    <form action="{{action('DetectiveController@hire', $detective->id)}}" method="post">
        @csrf

            <input type="text" name="subject" placeholder="What crime has been commited?">

            <textarea name="description" placeholder="Thorough description"></textarea>

            <input type="submit" value="Hire">
        </form>
    </section>

</div>
@endsection
