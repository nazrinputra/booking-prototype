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
                                        <input placeholder="Date" type="date" id="example" class="form-control">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 align-self-center">
                                    <fieldset>
                                        <select name="price" class="form-select" aria-label="Default select example"
                                            id="chooseCategory">
                                            <option value="" selected>Choose Room</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <button class="main-button"><i class="fa fa-search"></i> Search Now</button>
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
