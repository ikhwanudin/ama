@extends('layouts.dashboard')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="status" class="card text-white bg-warning">
                <div class="media">
                    <img src="{{ Avatar::create('Nur Ikhwanudin')->toBase64() }}" alt="" width="50">
                    <div class="media-body">
                        <div class="card-body clearfix">
                            <form action="{{ route('ask-store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <textarea name="question" id="" rows="1" class="form-control" placeholder="ask me anything?"></textarea>
                                </div>
                                <div class="form-group mt-2 float-right">
                                    <button class="btn btn-outline-primary">Ask</button>
                                </div>
                            </form>
                        </div>
                    </div>    
                </div>
            </div>

            @foreach($questions as $question)
            <div class="card my-3">
                <div class="card-body">
                    <p>{{ $question->question }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection