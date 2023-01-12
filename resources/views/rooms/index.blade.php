@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>Check Out Our Rooms</h6>
                        <h2>Rooms of Different Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="menu">
                                        @foreach ($categories as $index => $category)
                                            <div
                                                class="{{ $index == 0 ? 'first-thumb active' : '' }}{{ $index != 0 && $index != $category->count() - 1 ? 'thumb' : '' }}{{ $index == $category->count() - 1 ? 'last-thumb' : '' }}">
                                                <div class="thumb">
                                                    {{ $category->name }}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <ul class="nacc">
                                        @foreach ($categories as $index => $category)
                                            <li class="{{ $index == 0 ? 'active' : '' }}">
                                                <div>
                                                    <div class="col-lg-12">
                                                        <div class="owl-carousel owl-listing">
                                                            <div class="item">
                                                                <div class="row">
                                                                    @foreach ($category->rooms as $room)
                                                                        <div class="col-lg-12">
                                                                            <div class="listing-item">
                                                                                <div class="left-image">
                                                                                    <a href="#"><img
                                                                                            src="assets/images/listing-01.jpg"
                                                                                            alt=""></a>
                                                                                    <div class="hover-content">
                                                                                        <div class="main-white-button">
                                                                                            <a href="#"><i
                                                                                                    class="fa fa-eye"></i>
                                                                                                Book Now</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="right-content align-self-center">
                                                                                    <a href="#">
                                                                                        <h4>{{ $room->name }}</h4>
                                                                                    </a>
                                                                                    <h6>by: {{ $room->user->name }}</h6>
                                                                                    <span class="price">
                                                                                        <div class="icon"><img
                                                                                                src="assets/images/listing-icon-01.png"
                                                                                                alt=""></div>
                                                                                        RM{{ $room->price }} / day
                                                                                    </span>
                                                                                    <span class="details">Details:
                                                                                        <em>{{ $room->size }}</em></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
