@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>Room Categories</h6>
                        <h2>We have a wide range of room categories for you</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="category-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        @foreach ($categories as $index => $category)
                                            <div
                                                class="{{ $index == 0 ? 'first-thumb active' : '' }}{{ $index != 0 && $index != $category->count() - 1 ? 'thumb' : '' }}{{ $index == $category->count() - 1 ? 'last-thumb' : '' }}">
                                                <div class="thumb">
                                                    <span class="icon"><img
                                                            src="assets/images/search-icon-0{{ $index + 1 }}.png"
                                                            alt="">
                                                    </span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        @foreach ($categories as $index => $category)
                                            <li class="{{ $index == 0 ? 'active' : '' }}">
                                                <div>
                                                    <div class="thumb">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="top-content">
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="top-icon">
                                                                                <span class="icon"><img
                                                                                        src="assets/images/search-icon-0{{ $index + 1 }}.png"
                                                                                        alt="">
                                                                                    <h4>{{ $category->name }}</h4>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="main-white-button">
                                                                                <a href="#"><i class="fa fa-plus"></i>
                                                                                    Check Our Listings</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <div class="description">
                                                                    <div class="row">
                                                                        <div class="col-lg-9">
                                                                            <h4>Description for {{ $category->name }}</h4>
                                                                            <p>{{ $category->description }}</p>
                                                                        </div>
                                                                        <div class="col-lg-3">
                                                                            <div class="text-icon">
                                                                                <h4><img src="assets/images/listing-icon-heading.png"
                                                                                        alt=""> Total Listings</h4>
                                                                            </div>
                                                                            <span
                                                                                class="list-item">{{ $category->rooms_count }}
                                                                                Listings</span>
                                                                        </div>
                                                                    </div>
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
