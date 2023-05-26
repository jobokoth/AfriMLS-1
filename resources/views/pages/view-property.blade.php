@php(extract($data))
@extends('layouts.frontend.newlayout')
@section('content')
    <section class="py-4">
        <div class="container">

            <span>
                <h4><b>{{ $data[0]['property']->name }}</b></h4>
            </span>
            <div class="row g-5">
                <div class="col-md-8">
                    {{-- <div class="">
                        <div class="col-md-12">
                            <img class="w-100 h-25 img-fluid"
                                src="{{asset($data[0]['property']->image)}}"
                                alt="Image of {{ $data[0]['property']->name }}">
                        </div>
                    </div> --}}
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($imageUrls[$data[0]['property']->id] as $key => $imageUrl)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                <img src="{{asset($imageUrl)}}" class="d-block w-100" alt="...">
                            </div>
                            @endforeach
                          {{-- <div class="carousel-item active">
                            <img src="{{asset($data[0]['property']->image)}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset($data[0]['property']->image)}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset($data[0]['property']->image)}}" class="d-block w-100" alt="...">
                          </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>

                    <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-11">
                                        <h5 class="text-primary"><b>Ksh.
                                                {{ number_format($data[0]['property']->price) }}</b></h5>
                                    </div>

                                    <div class="col-1 mx-auto">
                                        <ion-icon name="heart" style="color: grey;" class="mx-auto"></ion-icon>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h5>{{ $data[0]['property']->name }}</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h5>{{ $data[0]['property']->street_name }}, Kenya</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    @if ($data[0]['property']->property_type == 'Land')
                                    @else
                                    <div class="col-1 float-left">
                                        <i class="fa-solid fa-bed fa-lg" style="color: grey"></i>
                                        {{ $data[0]['property']->number_bedroom }}
                                    </div>

                                    <div class="col-1 float-left">
                                        <i class="fa-solid fa-shower fa-lg" style="color: grey"></i>
                                        {{ $data[0]['property']->number_bathroom }}
                                    </div>

                                    <div class="col-1 float-left">
                                        <i class="fa-solid fa-car fa-lg" style="color: grey"></i> 1
                                    </div>

                                    <div class="col-1 float-left">
                                        <i class="fa-solid fa-dog fa-lg" style="color: grey"></i>
                                        1
                                    </div>
                                    @endif
                                </div>

                            </div>







                        </div>
                    </div>

                    <div class="row mx-0 item bg-white shadow-sm m-3 py-1 p-3">{!! nl2br($data[0]['property']->description) !!}</div>

                    <div class="row mx-0 item bg-white shadow-sm m-3 py-1 p-3">
                        <div class="container">
                            @if ($data[0]['property']->property_type == 'Land')
                            @else
                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-bed fa-lg" style="color: grey"></i> </div>
                                <div class="col-5">Bedrooms: {{ $data[0]['property']->number_bedroom }}</div>
                                <div class="col-1"><i class="fa-solid fa-dog fa-lg" style="color: grey"></i> </div>
                                <div class="col-5">Pet Friendly</div>
                            </div>

                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-shower fa-lg" style="color: grey"></i> </div>
                                <div class="col-5">Bathrooms: {{ $data[0]['property']->number_bathroom }}</div>
                                <div class="col-5">Garden</div>
                            </div>

                            <div class="row">
                                <div class="col-1"><i class="fa-solid fa-car fa-lg" style="color: grey"></i> </div>
                                <div class="col-5">Garages: 2</div>
                                <div class="col-1"></div>
                                <div class="col-5"></div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h4>Contact Agent</h4>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-2"><i class="fa-solid fa-phone fa-lg" style="color: #3bc89e"></i></div>
                            <div class="col-10">{{$data[0]['property']->owner_phone}}</div>
                        </div>
                        <div class="row p-2">
                            <div class="col-2"><i class="fa-solid fa-envelope fa-lg" style="color: #3bc89e"></i></div>
                            <div class="col-10">info.afrimls@gmail.com</div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12"><input type="text" class="form-control" placeholder="Name"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12"><input type="email" class="form-control" placeholder="Email"></div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12"><input type="text" class="form-control" placeholder="Mobile Number">
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12">
                                <textarea class="form-control">Please contact me regarding your reference</textarea>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-12">
                                <div class="d-grid gap-2 mx-auto">
                                    <input class="btn btn-primary" type="submit" value="Submit"
                                        style="background-color: #3bc89e; border-color: #3bc89e">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row mx-0 item bg-white shadow-sm m-3 py-1 p-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mx-auto text-center"><img src="{{asset('assets/images/logo/AfriMLS-logo-web.jpg')}}"></div>
                            </div>
                            <div class="row">
                                <div class="col-12 mx-auto text-center">
                                    <h4>AFRIMLS</h4>View all properties for sale
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 item bg-white shadow-sm m-3 py-1 p-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6>Douglas</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><i class="fa-solid fa-phone fa-lg"
                                                    style="color: #3bc89e"></i></div>
                                            <div class="col-10">0705 157 134</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2"><i class="fa-solid fa-envelope fa-lg"
                                                    style="color: #3bc89e"></i></div>
                                            <div class="col-10">info.afrimls@gmail.com</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mx-0 item bg-white shadow-sm m-3 py-1 p-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">Share</div>
                            </div>
                            <div class="row">
                                <div class="col-3"><i class="fa-brands fa-facebook"></i></div>
                                <div class="col-3"><i class="fa-brands fa-twitter"></i></div>
                                <div class="col-3"><i class="fa-brands fa-whatsapp"></i></div>
                                <div class="col-3"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <hr size="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"><i class="fa-solid fa-print"></i></div>
                                <div class="col-10">Print</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
