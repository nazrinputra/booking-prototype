@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="top-text header-text">
                        <h6>Home page for user</h6>
                        <h2>Displays categories and rooms</h2>
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
                            <div class="col">
                                <div class="mb-3 d-flex justify-content-between">
                                    <h4 class="mt-1">Rooms</h4>
                                    <a href="{{ route('rooms.create') }}" class="text-white">
                                        <button class="btn btn-primary">
                                            <i class="fa fa-plus-square"></i>
                                            &nbsp;Add
                                        </button>
                                    </a>
                                </div>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price (RM)</th>
                                            <th scope="col">Size</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rooms as $index => $room)
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $room->name }}</td>
                                                <td>{{ $room->price }}</td>
                                                <td>{{ $room->size }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-primary">
                                                        <a href="{{ route('rooms.edit', $room) }}" class="text-white">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    </button>
                                                    <button class="btn btn-danger">
                                                        <a href="{{ route('rooms.delete', $room) }}" class="text-white">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
