@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="https://www.fresco.dog/media/image/ac/63/93/FRESCO-Logo-XL59c4e2329c3d3.png">
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                    Welcome <span style="color: red">{{strtoupper(Auth::user()->name)}}</span>
                    </div>
                    <div style="margin-top: 20px">
                        @if($dog)
                            <a href="{{route('calculate')}}" class="btn btn-success"> Food Calculator </a>
                        @endif
                        @if(is_null($dog))
                            <a href="{{route('add_dog')}}" class="btn btn-success"> Add Dog </a>
                        @endif
                    </div>
                        @if($dog)
                    <div>
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Race</th>
                                <th scope="col">Age</th>
                                <th scope="col">Weight</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$dog->race}}</td>
                                <td>{{$dog->age}}</td>
                                <td>{{$dog->weight}}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                            @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
