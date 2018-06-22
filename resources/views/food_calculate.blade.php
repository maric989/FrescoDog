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
                            <p>
                            Hey <span style="color: red">{{Auth::user()->name}}</span><br>
                            Your buddy is {{$dog->age}} years old <br>
                            His  weight is {{$dog->weight}} kg
                            </p>
                            <p>
                                We can calculate all for you
                            </p>

                            <form action="{{action('HomeController@math')}}" method="post">
                                <div class="form-row align-items-center">
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    <input type="hidden" value="{{$dog->weight}}" name="weight">
                                    <div class="col-auto my-1">
                                        <select class="custom-select mr-sm-2" name="option">
                                            <option selected>Choose Plan</option>
                                            <option value="gain">Gain weight</option>
                                            <option value="lose">Lose weight</option>
                                            <option value="fit">Stay fit</option>
                                        </select>
                                    </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>

                                </div>
                            </form>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
