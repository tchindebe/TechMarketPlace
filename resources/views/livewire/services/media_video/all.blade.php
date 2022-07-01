@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row gx-4 gx-lg-5">
            @foreach($medias as $items)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <video width="100%" height="150" class="border rounded-md mb-2 img-fluid rounded mb-4 mb-lg-0" alt="..." controls>
                                <source src="{{asset('storage') . '/' . $items->review}}" type="video/mp4">
                                Votre explorateur ne supporte pas la balise video.
                            </video>
                            <h2 class="card-title">{{$items->title}}</h2>
                            <h5 class="card-title" style="color: #0b67cd;">{{$items->category}}</h5>
                        </div>
                        <div class="card-footer"><a href="{{route('payment.index', $items->id)}}" class="btn btn-primary mt-2 font-bold">Watch the video {{$items->price}} XAF</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
