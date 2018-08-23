@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                            <article>
                                <h4>
                                    <a href="/thread/{{$thread->id}}">{{$thread->title}}</a>
                                </h4>
                                <div class="body">
                                    {{$thread->body}}
                                </div>
                                <hr/>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
