@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>Create room</h6>
                        <h2>Input data for new room</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="inner-content">
                        <div class="row px-5 py-3">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('rooms.store') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="price"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Price (RM)') }}</label>

                                        <div class="col-md-6">
                                            <input id="price" type="number"
                                                class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{ old('price') }}" required autocomplete="price">

                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="size"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Size') }}</label>

                                        <div class="col-md-6">
                                            <input id="size" type="size"
                                                class="form-control @error('size') is-invalid @enderror" name="size"
                                                required autocomplete="size">

                                            @error('size')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="category_id"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-control @error('category_id') is-invalid @enderror"
                                                name="category_id" id="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="image"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                        <div class="col-md-6">
                                            <select class="form-control @error('image') is-invalid @enderror" name="image"
                                                id="image">
                                                <option value="BrainstormRoom.png">Brainstorm Room
                                                </option>
                                                <option value="CempakaHall.png">Cempaka Hall
                                                </option>
                                                <option value="Classroom.png">Classroom 1
                                                </option>
                                                <option value="Classroom2.png">Classroom 2
                                                </option>
                                                <option value="ClusterClassroom.png">Cluster
                                                    Classroom
                                                </option>
                                                <option value="KembojaHall.png">Kemboja Hall
                                                </option>
                                                <option value="LavendarHall.png">Lavendar Hall
                                                </option>
                                                <option value="MeetingRoom2.png">Meeting Room 2
                                                </option>
                                            </select>

                                            @error('image')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Create') }}
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
