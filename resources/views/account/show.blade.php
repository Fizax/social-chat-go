@extends ('layouts/app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h4>{{$account[0]->username}}</h4>
                        <ul>
                            @for($i = 0; $i < count($account); $i++)
                                <li>{{$account[$i]->name}}</li>
                                @endfor
                        </ul>
                        @if($account[0]->id == Auth::id())
                            {{--<a href="{{route('interests.edit', $account[0]->id)}}">Bewerk profiel</a>--}}
                            <a href="{{route('interests.edit', $account[0]->id)}}">Bewerk interesses</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection