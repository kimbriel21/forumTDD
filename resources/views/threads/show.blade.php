@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                            <article>

                                <div class="body">
                                    {{$thread->body}} {{$thread->id}}
                                </div>

                            </article>
                    </div>
                </div>
            </div>

        </div>
        @foreach($thread->replies as $reply)
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <article>

                            <div class="body">
                                {{$thread->body}}
                            </div>

                        </article>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
@endsection
