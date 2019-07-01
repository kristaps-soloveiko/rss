@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Top 10 word counts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($words as $word => $count)
                            <div class="col-md-12 text-left">Word <strong>{{$word}}</strong> was found <strong>{{$count}}</strong> times</div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
