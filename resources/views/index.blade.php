@extends('layouts.main')

@section('main-section')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ Storage::url('photos/ph2.jpg') }}" class="w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ Storage::url('photos/photos.jpg') }}" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ Storage::url('photos/ph3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="">
        <div class="row justify-content-center my-3">
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph1.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph2.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph4.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>

            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph5.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-3">
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph6.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph7.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph8.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
            <div class="card col-3 m-2" style="width: 18rem;">
                <img src="{{ Storage::url('photos/cph9.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
