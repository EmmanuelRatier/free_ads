@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">  
        <table class="table table-border table-striped">
        <div class="col-md-8" style="margin-top:4.5em;">
                            <thead>
                                <tr>
                                    <th>username</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>edit profil</th>
                                    <th>delete profil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td>The secret password</td>
                                    <td>
                                        <form action="{{ route('edit') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-info">{{ __('Edit') }}</button>
                                        </form>
                                    </td>
                                    <td>   
                                    <form method="post" action="{{ route('destroy') }}">
                                        @csrf
                                        <button style="padding: 0" type="submit" class="btn btn-link margin-left- 
                                        40" onclick=" return confirm('Vous allez supprimer votre compte {{ Auth::user()->name }}')">
                                        <i class="icmn-bin"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                </div>
            </div>
        </table>
    </div>
</div>
@endsection