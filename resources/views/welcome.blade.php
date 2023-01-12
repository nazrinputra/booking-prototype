@extends('layouts.app')

@section('content')
    <div class="main-banner">
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
                <main class="py-4">
                    <div class="col-lg-12">
                        <div class="top-text header-text">
                            <h6>Ready to get started?</h6>
                            <h2>Book Rooms</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form id="search-form" method="POST" action="{{ route('bookings.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 align-self-center">
                                    <fieldset>
                                        <input placeholder="Date" type="date" name="date" id="date"
                                            value="{{ date('Y-m-d') }}" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <fieldset>
                                        <select name="room_id" class="form-select" id="room_id">
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <button type="submit" class="main-button"><i class="fa fa-calendar"></i> Book
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
