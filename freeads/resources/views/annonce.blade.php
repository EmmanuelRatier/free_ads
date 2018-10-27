@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Votre annonce</div>
                <div class="card-body">
                    <form action=" {{ action('AnnonceController@store') }}" method="post">
                            @csrf
                            <div class="form-group">
                            <strong>Tilte</strong>
                            <input type="text" class="form-control"  placeholder="exemple: clio II" name="title"> <br>

                            <strong>Description</strong>
                            <input type="text" class="form-control" placeholder="exemple: bien entretenu, année 1998 diesel" value="" name="description"> <br>

                            <strong>Image</strong>
                            <input type="file" name="image" value="">
                           <!--  <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                            <br>
                            <br>
                            <strong>Price</strong>
                            <input type="number" name="price">
                            <br><br>
                            <button type="submit" class="btn btn-dark">Poster</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
