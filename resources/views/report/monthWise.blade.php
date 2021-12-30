@extends("layouts.app")
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Monthwise Book Issue Report</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form class="yourform mb-5" action="{{ route('reports.month_wise_generate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="month" name="month" class="form-control" value="{{ date('Y-m') }}">
                        </div>
                        <input type="submit" class="btn btn-danger" name="search_month" value="Search">
                    </form>
                </div>
            </div>
            @if ($books)
                <div class="row">
                    <div class="col-md-12">
                        <table class="content-table">
                            <thead>
                                <th>S.No</th>
                                <th>Student Name</th>
                                <th>Book Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Issue Date</th>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->student->name }}</td>
                                        <td>{{ $book->book->name }}</td>
                                        <td>{{ $book->student->phone }}</td>
                                        <td>{{ $book->student->email }}</td>
                                        <td>{{ $book->issue_date->format('d M, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">No Record Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
