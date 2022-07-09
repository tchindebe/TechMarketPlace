@extends('layouts.services_app')

@section('contents')
    <div class="search-sec">
        <div class="container">
            <div class="search-box">
                <form>
                    <input type="text" name="search" placeholder="Search keywords">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <main>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="filter-secs p-4">
                                <p>

                                    Hi, to put a video on sale,
                                    you must select a demo video of
                                    less than 30 seconds which will allow
                                    the customer to see an aspect of your video before buying.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-white p-10">
                            <div class="main-ws-sec ">
                                <div class="posts-section">
                                    <form class="p-10 mt-5 mb-5" action="{{route('service.media.add')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" {{ (old('title')) }} class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="number" {{ (old('price')) }} name="price" class="form-control @error('price') is-invalid @enderror" id="exampleInputPassword1" placeholder="Price">
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <textarea {{ (old('description')) }} class="form-control @error('description') is-invalid @enderror" name="description" placeholder="description" id="exampleTextarea" rows="3"></textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="reg_password">Category
                                                <span class="required">*</span>
                                            </label>
                                            <select class="form-select" name="category" aria-label="select example">
                                                <option value="Clip video">Clip video</option>
                                                <option value="Oumour">Oumour</option>
                                                <option value="Music">Music</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="file" {{ (old('short_review')) }} class="form-control-file @error('short_review') is-invalid @enderror" name="short_review" id="exampleInputFile" aria-describedby="fileHelp">
                                            <small id="fileHelp" class="form-text text-muted">Demo video (30 seconds max)</small>
                                            @error('short_review')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="file" {{ (old('review')) }} class="form-control-file @error('review') is-invalid @enderror" name="review" id="exampleInputFile" aria-describedby="fileHelp">
                                            <small id="fileHelp" class="form-text text-muted">Video complete</small>
                                            @error('review')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="filter-secs p-4">
                                <p>
                                    The full video will be seen as soon as the
                                    customer has paid the necessary amount. please respect
                                    the instructions otherwise customers will rather see your video entirely
                                    without buying which will not be to your advantage
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
