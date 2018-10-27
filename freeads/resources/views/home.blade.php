@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                           <?php  //dd(Session::all());?> 
                    You are logged in! 
                </div>
                <div class="card" style="border:3px solid black; ">
                @foreach($displays as $display)

                <h4>{{ $display->title }}</h4>
                <h5>{{ $display->description }}</h5>
                <h3>{{ $display->price }}</h3>
                
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
