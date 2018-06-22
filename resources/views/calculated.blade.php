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
                        @if($gain)
                            <p> Your buddy should take {{$gain}} gr/per day </p>
                            <p> We suggest you the next:</p>
                            <a href="https://www.fresco.dog/trockenbarf/?animal=all">
                                <img src="https://www.fresco.dog/media/image/9a/32/f4/trockenbarf-cp-bundle_800x600.jpg" width="80%">
                            </a>
                        @elseif($lose)
                                <p> Your buddy should take {{$lose}} gr/per day </p>
                                <p> We suggest you the next:</p>
                                <a href="https://www.fresco.dog/trockenbarf/fuer-junioren/561/trockenbarf-junioren-menue-huhn-mit-kuerbis-topinambur-und-bluetenpollen?c=121">
                                    <img src="https://fresco.dog/media/image/12/8d/b6/complete-plus-fertigbarf.jpg" width="80%">
                                </a>
                        @else
                                <p> Your buddy should take {{$fit}} gr/per day </p>
                                <p> We suggest you the next:</p>
                                <a href="https://www.fresco.dog/trockenbarf/?animal=all">
                                    <img src="https://www.fresco.dog/media/image/9a/32/f4/trockenbarf-cp-bundle_800x600.jpg" width="80%">
                                </a>
                        @endif


                    </div>


                </div>


            </div>
        </div>
    </div>
    </div>
@endsection
