@extends('home')

@section('info')
	<div class="col-md-8">
            <div class="card">
                <div class="card-header">Ispiti</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Trenutno nema obavestenja
                </div>
            </div>
        </div>
@endsection