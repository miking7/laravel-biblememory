@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        @foreach ($verses as $verse)
                            <p>{{ $verse->id }} {{ $verse->user_id }} {{ $verse->reference }}</p>
                        @endforeach
                    </div>
                    <div>
                        {{ json_encode($verses) }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
