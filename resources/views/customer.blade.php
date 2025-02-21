@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Customer Detail</div>
                    <div class="card-body">

                        <p>
                            Name: <strong>{{ $customer->name }}</strong>
                            <br>
                            Email: <strong>{{ $customer->email }}</strong>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
