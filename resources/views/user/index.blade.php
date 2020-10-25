@extends('layouts.app')

@section('content')
    <div class="ml-4 mr-4">
        <form class="form-row" method="GET" action="{{ route('users.index') }}">
        @csrf
            <div class="form-group col">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Name</div>
                    </div>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inlineFormInputGroup">
                </div>
            </div>
            <div class="form-group col">
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Surname</div>
                </div>
                <input type="text" name="surname" value="{{ old('surname') }}" class="form-control" id="inlineFormInputGroup">
            </div>
            </div>
            <div class="form-group col">
                <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Location</div>
                </div>
                <input type="text" name="location" value="{{ old('location') }}" class="form-control" id="inlineFormInputGroup">
                </div>
            </div>
            <div class="form-group col">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">State</div>
                    </div>
                    <select class="custom-select" name="is_infected" id="inlineFormInputGroup">
                        <option value="" {{ old('is_infected') === "" ? 'selected' : '' }}>All</option>
                        <option value="false" {{ old('is_infected') === "false" ? 'selected' : '' }}>Healthy</option>
                        <option value="true" {{ old('is_infected') === "true" ? 'selected' : '' }}>Infected</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Search</button>
            </div>
    </form>
    <br/>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">{{ __('Name') }}</th>
                <th scope="col">{{ __('Surname') }}</th>
                <th scope="col">{{ __('Location') }}</th>
                <th scope="col">{{ __('Last activity') }}</th>
                <th scope="col">{{ __('State') }}</th>
                <th scope="col">{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->location }}</td>
                <td>{{ $user->last_login }}</td>
                <td>
                    @include('partials._infected-button-action', compact('user'))
                </td>
                <td class="text-left">
                    <div class="btn-group">
                        @include('partials._user-show-button', compact('user'))
                        @if(!$user->is_infected)
                            <a href="{{ route('messages.create', ['recipient' => $user]) }}"
                               class="btn btn-success ml-1">
                               {{ __('New thread') }}
                            </a>
                        @endif
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <nav class="pagination justify-content-center">
        {{ $users->appends([
            'name' => old('name'),
            'surname' => old('surname'),
            'location' => old('location'),
            'is_infected' => old('is_infected')
            ])->links() 
        }}
    </nav>
</div>
@endsection
