@extends('layouts.app')

@section('content')
    <div class="container col-lg-8 col-md-10 col-sm-12">
        <h1>Visitors</h1>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Purpose</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visitors as $visitor)
                    <tr>
                        <td>{{ $visitor->name }}</td>
                        <td>{{ $visitor->email }}</td>
                        <td>{{ $visitor->phone }}</td>
                        <td>{{ $visitor->purpose }}</td>
                        <td>{{ $visitor->checkin_status ? "Checked in" : "Checked out" }}</td>
                        <td>
                            <form action="{{ route('visitor.checkout', $visitor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" {{ $visitor->checkin_status ? '' : 'disabled' }}>Check Out</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
