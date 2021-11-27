{{ $document->title }}

<hr />

<ul>
@foreach($document->adjustments as $user)
    <li>{{ $user->email  }} on {{ $user->pivot->updated_at->diffForHumans() }}</li>
@endforeach
</ul>
