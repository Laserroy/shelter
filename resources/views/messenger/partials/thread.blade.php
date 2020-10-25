<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
    </h4>
    <p>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>