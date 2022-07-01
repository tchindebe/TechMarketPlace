@extends('layouts.base')

@section('content')
    @if(Auth::User()->user_type =="Client")
        <div class="m-t-10">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
        </div>

        <div class="container">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-lg-7">
                    <video width="100%" height="240" class="border rounded-md mb-2 img-fluid rounded mb-4 mb-lg-0" alt="..." controls>
                        <source src="{{asset('storage') . '/' . $media->review}}" type="video/mp4">
                        Votre explorateur ne supporte pas la balise video.
                    </video>
                </div>

                <div class="col-lg-5">
                    <h1 class="font-weight">{{$media->title}}</h1>
                    <h4 class="text-blue-700" style="color: #0b67cd;">{{$media->category}}</h4>
                    <p>{{$media->description}}</p>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-primary my-5 py-2 text-center">
                <div class="card-body"><p class="text-white m-0">These videos may interest you</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                @foreach($medias as $items)
                    @if($items->id != $media->id)
                        <div class="col-md-4 mb-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <video width="100%" height="150" class="border rounded-md mb-2 img-fluid rounded mb-4 mb-lg-0" alt="..." controls>
                                        <source src="{{asset('storage') . '/' . $items->review}}" type="video/mp4">
                                        Votre explorateur ne supporte pas la balise video.
                                    </video>
                                    <h2 class="card-title">{{$items->title}}</h2>
                                    Category : <h5 class="card-title">{{$items->category}}</h5>
                                </div>
                                <div class="card-footer"><a href="{{route('payment.index', $items->id)}}" class="btn btn-primary mt-2 font-bold">Watch the video {{$items->price}} XAF</a></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @endif
@endsection
