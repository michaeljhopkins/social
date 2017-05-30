@foreach($posts as $post)
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="level">
                <h4 class="flex">
                    {{$post->contact->last_name}}, {{$post->contact->first_name}} said
                    <a href="{{$post->permalink}}">{{$post->created_at->diffForHumans()}}</a>
                </h4>
                <a href="/networks/{{ $post->network_id }}">
                    <i class="phpdebugbar-fa {{$post->network->icon}}"></i>
                </a>
            </div>
        </div>
        <div class="panel-body">
            <div class="body">
                @if($post->network->name == 'Instagram')
                    <img src="{{$post->content}}">
                @else
                    {{ $post->content }}
                @endif
            </div>
        </div>
    </div>
@endforeach