@php(extract($data))
@extends('layouts.frontend.newlayout')
@section('content')
<section class="py-4">
    <div class="container">

        <span><h5><b>Our Featured Properties</b></h5></span>
        <div class="row g-5">
            <div class="col-md-8">
                @if(count($properties) >= 1)
                @foreach($properties as $property)

                    <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                        {{-- <div class="col-md-5">
                            <img src="{{$property->getPropertyImage()}}" alt="" class="w-100">
                        </div> --}}
                        <div id="carouselExampleAutoplaying" class="carousel slide col-md-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($imageUrls[$property->id] as $key => $imageUrl)
                                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                        <img src="{{asset($imageUrl)}}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
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
                        <div class="col-md-7">
                            <div class="align-self-center">
                                <h5><a href="{{route('show', $property->id)}}" style="color: black; text-decoration: none">{{$property->name}}</a></h5>
                                <h6 class="text-danger my-1"><b>Ksh. {{number_format($property->price)}}</b></h6>
                                <div class="d-flex justify-content-between">
                                    <div class="w-75 mt-1">
                                        @if($property->property_type == 'Land')
                                            <span><img src="https://img.icons8.com/ios-filled/15/000000/land-sales.png" class="mx-0"/></span>
                                        @else
                                        <span><img src="https://img.icons8.com/ios-filled/15/000000/bed.png" class="mx-0"/>{{$property->number_bedroom}}</span>
                                        <span><img src="https://img.icons8.com/ios-filled/15/000000/bath.png" class="mx-2"/>{{$property->number_bathroom}}</span>
                                        @endif
                                    </div>
                                    <div class="w-25">
                                        <small class="text-muted mb-1 pb-1">
                                            <img src="https://img.icons8.com/ios-filled/15/000000/place-marker.png" class=""/> {{$property->street_name}}
                                        </small>
                                    </div>
                                </div>
                                <p style="font-size:small; padding-top: 4px">{{$property->short_description}}</p>

                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="left">
                                    <img src="https://i.pinimg.com/originals/c2/9b/d0/c29bd095d495c6aa7d068080a13c7038.png" alt="" class="client-logo">
                                </div>
                                <div class="float-end">
                                    <img src="https://img.icons8.com/ios-filled/20/25d366/whatsapp.png" class="mx-2"/>
                                    <img src="https://img.icons8.com/ios-filled/20/dc3545/phone.png" class="mx-2"/>
                                    <img src="https://img.icons8.com/ios-filled/20/dc3545/mail.png" class="mx-2"/>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="row mx-0 item bg-white shadow-sm mb-1 py-1">
                    <div class="col-md-12">
                        <div class="align-self-center">
                            <h5>Sorry! No properties listed currently</h5>
                        </div>
                    </div>
                </div>
            @endif
            </div>
            <div class="col-md-4">
                @include('pages.side-menu')
            </div>
        </div>
    </div>
  </section>
  <!-- <section class="bg-dark py-4">
    <div class="container">
      <div class="d-flex justify-content-around mx-auto w-75">
      <h3 class="text-white"><b>Stay in Touch! Join our Newsletter</b>
    </h3>
      <button class="form-control btn-danger w10">SUBSCRIBE NOW</button>

      </div>
    </div>
  </section> -->
  <section class="bg-black py-4">
    <div class="container">

      <div class="text-center mx-auto w-50 mt-4">
      <h3 class="text-white"><b>Join our professional team & agents to start selling your house</b>
    </h3>
      <button class="form-control btn-danger w10 mt-3 mx-auto">CONTACT</button>

      </div>
    </div>
  </section>
@endsection
