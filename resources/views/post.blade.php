<ul>
    @can('view-posts')
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    @endcan
</ul>
