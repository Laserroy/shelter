<form method="POST" action="{{ route('user.infected', [$user]) }}">
    @csrf
    @method('PATCH')
    @if(!$user->is_infected)
        <button type="submit"
                class="btn btn-danger float-left"
                onclick="return confirm('Mark as infected?')">
            Mark as infected
        </button>
    @else
        <button disabled
                class="btn btn-secondary">
            Zombie
        </button>
    @endif
</form>