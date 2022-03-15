@extends('layouts.backend.layout')


@section('title')
   add {{$data[0]['propertyType']->name}}
@endsection

@section('content')

<div class="card">
    <form action="{{route('property.store')}}" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <p>
                <label for="pname">property name </label>
                <input type="text" name = "pname" class="form-control">
            </p>

            <p>
                <label for="pname">property image</label>
                <input type="file" name="property_images[]" class="form-control" multiple>
            </p>

            <p>
                <label for="">Type</label>
                <select name="option_id" id="" class="form-control">Type
                    <option value="" disabled>select option</option>
                    @foreach ($data[0]['options'] as $option)
                        <option value="{{$option->id}}">{{$option->name}}</option>
                    @endforeach
                </select>
            </p>


        </div>
        <div class="col-md-6">
            <p>
                <label for="">Cities</label>
              <select name="city_id" id="" class="form-control">
                  <option value="" disabled>select city</option>
                  @foreach ($data[0]['cities'] as $city)
                   <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach

              </select>
          </p>

            <p>
                <label for="description">Description</label>
                <textarea name="description" id="" cols="20" rows="5" class="form-control"></textarea>
            </p >

            <input type="hidden" value="{{$data[0]['propertyType']->id}}" name ="propertyTypeId">



        </div>
    </div>
    {{-- end of row --}}
      {{-- <div class="#">
            @csrf

              @if(session()->has('success'))
              <span style="color: blue">{{session('success')}}</span></br>
              @elseif(session()->has('delete'))
              <span style="color:red">{{session('delete')}}</span></br>
              @endif



      </div> --}}
      <h3>community feautures</h3>
      <div class="container row">
        @foreach ($data[0]['f_communities'] as $c_feauture)
          <div class=" col-md-2">
            <ul class="list-unstyled">


              <li><input type="checkbox" name="community_fs[]" value="{{$c_feauture->id}}" >{{$c_feauture->c_feautures}}</li>

            </ul>

          </div>
          @endforeach
        </div>
        {{-- exterior feautures --}}
        <h3>  Exterior feautures</h3>
        <div class="container row">
            @foreach ($data[0]['exterior_feautures'] as $exterior_feauture)
              <div class=" col-md-2">
                <ul class="list-unstyled">
                    <li><input type="checkbox" name="community_fs[]" value="{{$exterior_feauture->id}}" >{{$exterior_feauture->exterior_features}}</li>


                </ul>

              </div>
              @endforeach
            </div>























      <p>

        <input type="submit" class="form-control btn btn-primary" >
    </p>


    </form>
</div>


@endsection
