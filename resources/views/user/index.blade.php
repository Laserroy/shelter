@extends('layouts.app')

@section('content')
<form class="form-row" method="GET" action="{{ route('users.index') }}">
    @csrf
        <div class="form-group col">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Name</div>
              </div>
              <input type="text" name="name" class="form-control" id="inlineFormInputGroup">
            </div>
          </div>
        <div class="form-group col">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">Surname</div>
            </div>
            <input type="text" name="surname" class="form-control" id="inlineFormInputGroup">
          </div>
        </div>
        <div class="form-group col">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Location</div>
              </div>
              <input type="text" name="location" class="form-control" id="inlineFormInputGroup">
            </div>
        </div>
        <div class="form-group col">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">State</div>
              </div>
              <select class="custom-select" name="is_infected" id="inlineFormInputGroup">
                <option selected></option>
                <option value="false">Healthy</option>
                <option value="true">Infected</option>
              </select>
            </div>
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-2">Search</button>
        </div>
</form>
<br/>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Location</th>
            <th scope="col">Last activity</th>
            <th scope="col">State</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->location }}</td>
            <td>{{ $user->last_login }}</td>
            <td>{{ $user->is_infected ? 'infected' : 'healthy' }}</td>
            <td>{{ 'stub for buttons' }}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
{{ $users->links() }}
@endsection
