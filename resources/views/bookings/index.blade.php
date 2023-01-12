@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>Always be one step ahead</h6>
                        <h2>View the calendar for planning</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content p-4">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,listWeek'
                },
                events: [
                    // my event data
                    @foreach ($bookings as $booking)
                        {
                            id: '{{ $booking->id }}',
                            title: '{{ $booking->room->name }}',
                            start: '{{ $booking->date->toDateString() }}'
                        },
                    @endforeach
                ],
            });
            calendar.render();
        });
    </script>
@endsection
