@extends('layouts.app')

@section('content')
    <div class="main-banner">
        <div class="container">
            <div class="row">
                <main class="py-4">
                    <div class="col-lg-12">
                        <div class="top-text header-text">
                            <h6>Ready to get started?</h6>
                            <h2>Find Rooms</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form id="search-form" name="gs" method="submit" role="search" action="#">
                            <div class="row">
                                <div class="col-lg-4 align-self-center">
                                    <fieldset>
                                        <input placeholder="Date" type="date" id="example" value="{{ date('Y-m-d') }}"
                                            class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <fieldset>
                                        <select name="price" class="form-select" aria-label="Default select example"
                                            id="chooseCategory">
                                            <option value="" selected>Choose Room</option>
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <button class="main-button"><i class="fa fa-calendar"></i> Book Now</button>
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
