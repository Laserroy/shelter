@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>{{ __('Name') }}</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>{{ __('Surame') }}</td>
                    <td>{{ $user->surname }}</td>
                </tr>
                <tr>
                    <td>{{ __('Location') }}</td>
                    <td>{{ $user->location }}</td>
                </tr>
                <tr>
                    <td>{{ __('Birth') }}</td>
                    <td>{{ $user->birth }}</td>
                </tr>
                <tr>
                    <td>{{ __('Phone number') }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection