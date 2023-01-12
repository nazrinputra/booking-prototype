@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>View/Edit booking</h6>
                        <h2>Display data for {{ date('d/m/Y', strtotime($booking->date)) }} - {{ $booking->room->name }}
                        </h2>
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
                <div class="col">
                    <div class="inner-content">
                        <div class="row px-5 py-3">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('bookings.update', $booking) }}">
                                    @csrf @method('PUT')

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $booking->user->name }}" required autocomplete="name" readonly>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="date"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                                        <div class="col-md-6">
                                            <input id="date" type="date"
                                                class="form-control @error('date') is-invalid @enderror" name="date"
                                                value="{{ date('Y-m-d', strtotime($booking->date)) }}" required
                                                autocomplete="date" @if (Auth::user() && $booking->user->id == Auth::user()->id) @else readonly @endif>

                                            @error('date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="room_id"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Room') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-control @error('room_id') is-invalid @enderror"
                                                name="room_id" id="room_id"
                                                @if (Auth::user() && $booking->user->id == Auth::user()->id) @else disabled @endif>
                                                @foreach ($rooms as $room)
                                                    @if ($booking->room_id == $room->id)
                                                        <option value="{{ $room->id }}" selected='true'>
                                                            {{ $room->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $room->id }}">
                                                            {{ $room->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                            @error('room_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
