@extends('layout.master')
@section('content')
<div class="container-fluid my-2">
    <div class="row">
        <div class="col-md-12">
            <div class="row py-3">
                {{-- cart --}}
                <div class="col-md-6 col-lg-3 col-sm-12 mb-md-3">
                    <div class="card card-hover">
                        <div class="card-body">
                            <img src="./img/logo.jpg" class="card-img-top" alt="..." />
                            <hr />
                            <h5 class="card-title fw-bold fs-6">لورم ایپسوم متن</h5>
                            <p class="card-text">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ،
                                و
                            </p>
                            <a href="#" class="btn btn-outline-dark">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- /cart --}}
            </div>
        </div>
    </div>
</div>
@endsection