@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Les annonces</div>
                @foreach($displays as $display)
                <div class="card" style="border:3px solid black;padding:2em;margin-bottom:1.8em; margin-top:0.1em; ">

                <h4>{{ $display->title }}</h4>
                <h5>{{ $display->description }}</h5>
                <h3>{{ $display->price }}</h3>
                <!-- @section('img',Storage::disk('local')->url($display->image))
                <div>{{ $display->image }}</div> -->
                
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
