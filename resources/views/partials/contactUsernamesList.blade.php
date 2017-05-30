<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <h4 class="flex">
                Contacts in List
            </h4>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-condensed table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $c)
                @foreach($c->usernames as $u)
                    <tr>
                        <td>{{$c->last_name}}, {{$c->first_name}}</td>
                        <td><a href="{{$u->network->url.$u->identifyer}}"><i class="phpdebugbar-fa {{$u->network->icon}}"></i> {{$u->identifyer}}</a></td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
</div>