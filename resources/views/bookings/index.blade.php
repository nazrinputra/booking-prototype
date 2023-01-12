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
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('danger'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('danger') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
                    right: 'dayGridMonth,listWeek',
                },
                eventDidMount: function(info) {
                    $(info.el).tooltip({
                        title: info.event.extendedProps.description,
                        placement: "top",
                        trigger: "hover",
                        container: "body"
                    });
                },
                events: [
                    // my event data
                    @foreach ($bookings as $booking)
                        {
                            id: '{{ $booking->id }}',
                            title: '{{ $booking->room->name }}',
                            start: '{{ $booking->date->toDateString() }}',
                            description: 'Booked by {{ $booking->user->name }}',
                            url: '{{ route('bookings.edit', $booking) }}',
                            backgroundColor: '{{ $booking->user->color }}',
                        },
                    @endforeach
                ],
            });
            calendar.render();
        });
    </script>
@endsection
