@extends('layouts.app')
@section('content')
    {{-- check is user is admin --}}
    @if(Auth::user()->is_admin == True)
        {{-- admin user --}}
        @include('dashboard')
    @else
        {{-- student profile --}}
        <h1 class="rm-pd">Welcome!</h1>
        <div class="row">
            <div class="col-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <h4 class="card-title">Set up profile</h4>
                        <p class="card-text">Personal, Parents, Family Background, Scholastic Records, and Organizational Affiliations.</p>
                        <a class="white-links" href="/profile" class="card-link">Go to profile >></a>
                    </div>
                </div>
            </div> <!-- item col -->
            <div class="col-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h4 class="card-title">Appointment status</h4>
                        <p class="card-text">View status of your appointment request whether it is rescheduled or approved.</p>
                        <a class="white-links" href="/studentappointments" class="card-link">Go to appointments >></a>
                    </div>
                </div>
            </div> <!-- item col -->
            <div class="col-3">
                <div class="card text-white bg-danger">
                    <div class="card-body">
                        <h4 class="card-title">Request an appointment</h4>
                        <p class="card-text">Want to talk to the guidance counselor? Request an appointment here.</p>
                        <a class="white-links" href="/appointments/create" class="card-link">Set an appointment >></a>
                    </div>
                </div>
            </div> <!-- item col -->
            <div class="col-3">
                <div class="card text-white bg-success">
                    <div class="card-body">
                        <h4 class="card-title">See if you violated any rules</h4>
                        <p class="card-text">See if you violated any rules or policies here.</p>
                        <a class="white-links" href="/profile#SDA" class="card-link">Go to records >></a>
                    </div>
                </div>
            </div> <!-- item col -->
        </div> <!-- row -->     
    @endif
@endsection

            





