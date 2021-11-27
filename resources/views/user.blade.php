<ul>
    @foreach($users as $user)
        @if($loop->last)
            <p>{{ $user->email }}</p>
        @endif
    @endforeach
</ul>
