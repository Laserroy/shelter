@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Last activity</th>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $loop->index }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->last_login }}</td>
            <td>{{ $user->is_infected ? 'infected' : 'healthy' }}</td>
            <td>{{ 'stub for buttons' }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
{{ $users->links() }}
@endsection
