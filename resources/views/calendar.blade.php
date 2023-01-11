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
                events: [
                    // my event data
                    @for ($i = 1; $i <= 3; $i++)
                        {
                            id: '{{ $i }}',
                            title: 'my event {{ $i }}',
                            start: '2023-01-13'
                        },
                    @endfor
                ],
            });
            calendar.render();
        });
    </script>
@endsection
