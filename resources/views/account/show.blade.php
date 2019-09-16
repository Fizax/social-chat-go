@extends ('../layouts/app')

@section
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h4>{{$userInfo->name}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection