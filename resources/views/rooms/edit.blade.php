@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>View/Edit room</h6>
                        <h2>Display {{ $room->name }}</h2>
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
                                <form method="POST" action="{{ route('rooms.update', $room) }}">
                                    @csrf @method('PUT')

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $room->name }}" required autocomplete="name" autofocus>

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
                                            <input id="price" type="number" step="any"
                                                class="form-control @error('price') is-invalid @enderror" name="price"
                                                value="{{ $room->price }}" required autocomplete="price">

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
                                                value="{{ $room->size }}" required autocomplete="size">

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
                                                    @if ($room->category_id == $category->id)
                                                        <option value="{{ $category->id }}" selected="true">
                                                            {{ $category->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>
                                                    @endif
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
                                                <option value="BrainstormRoom.png"
                                                    @if ($room->image == 'BrainstormRoom.png') selected='true' @endif>Brainstorm Room
                                                </option>
                                                <option value="CempakaHall.png"
                                                    @if ($room->image == 'CempakaHall.png') selected='true' @endif>Cempaka Hall
                                                </option>
                                                <option value="Classroom.png"
                                                    @if ($room->image == 'Classroom.png') selected='true' @endif>Classroom 1
                                                </option>
                                                <option value="Classroom2.png"
                                                    @if ($room->image == 'Classroom2.png') selected='true' @endif>Classroom 2
                                                </option>
                                                <option value="ClusterClassroom.png"
                                                    @if ($room->image == 'ClusterClassroom.png') selected='true' @endif>Cluster
                                                    Classroom
                                                </option>
                                                <option value="KembojaHall.png"
                                                    @if ($room->image == 'KembojaHall.png') selected='true' @endif>Kemboja Hall
                                                </option>
                                                <option value="LavendarHall.png"
                                                    @if ($room->image == 'LavendarHall.png') selected='true' @endif>Lavendar Hall
                                                </option>
                                                <option value="MeetingRoom2.png"
                                                    @if ($room->image == 'MeetingRoom2.png') selected='true' @endif>Meeting Room 2
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
