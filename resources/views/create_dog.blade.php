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
                        <h3> Register your dog</h3>
                        <form action="{{action('HomeController@storeDog')}}" method="post">
                            {{--{{ csrf_token() }}--}}
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="form-group">
                                <label for="breed">Dog Breed</label>
                                <input type="text" class="form-control" name="breed" placeholder="Enter breed">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" name="age" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="age">Weight</label>
                                <input type="text" class="form-control" name="weight" placeholder="Enter weight">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
