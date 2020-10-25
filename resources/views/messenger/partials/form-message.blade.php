<h4>Add a new message</h4>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
    <div class="form-group">
        <textarea name="message" class="form-control">{{ old('message') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>