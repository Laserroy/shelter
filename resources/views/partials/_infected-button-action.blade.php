<form method="POST" action="{{ route('user.infected', [$user]) }}">
    @csrf
    @method('PATCH')
    @if(!$user->is_infected)
        <button type="submit"
                class="btn btn-danger"
                onclick="return confirm('Mark as infected?')">
                {{ __('Mark infected') }}
        </button>
    @else
        <button disabled
                class="btn btn-secondary">
            {{ __('Zombie') }}
        </button>
    @endif
</form>