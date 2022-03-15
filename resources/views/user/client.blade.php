@extends('layouts.adminShop')

@section('content')

<div class="container alert alert-success">
    bonjour <strong>{{$user->username}}</strong>
    <strong>{{$user->user_type}}</strong>
</div>
@endsection
