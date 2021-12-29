@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Setting</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('settings') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Return Days</label>
                            <input type="number" class="form-control" name="return_days" value="{{ $data->return_days }}"
                                required>
                            @error('return_days')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Fine (in Rs.)</label>
                            <input type="number" class="form-control" name="fine" value="{{ $data->fine }}" required>
                            @error('fine')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-danger" value="Update" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
