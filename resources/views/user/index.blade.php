@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full name</th>
            <th scope="col">Last activity</th>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $loop->index }}</th>
            <td>{{ $user->getFullName() }}</td>
            <td>{{ $user->last_login }}</td>
            <td>{{ $user->is_infected ? 'infected' : 'healthy' }}</td>
            <td>{{ 'stub for buttons' }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
{{ $users->links() }}
@endsection
