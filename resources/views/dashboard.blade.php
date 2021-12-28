@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Dashboard</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $authors }}</p>
                            <h5 class="card-title mb-0">Authors Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $publishers }}</p>
                            <h5 class="card-title mb-0">Publishers Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $categories }}</p>
                            <h5 class="card-title mb-0">Categories Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $books }}</p>
                            <h5 class="card-title mb-0">Books Listed</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $students }}</p>
                            <h5 class="card-title mb-0">Register Students</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 14rem; margin: 0 auto;">
                        <div class="card-body text-center">
                            <p class="card-text">{{ $issued_books }}</p>
                            <h5 class="card-title mb-0">Book Issued</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
