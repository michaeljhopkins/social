<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <h4 class="flex">Filters</h4>
        </div>
    </div>
    <div class="panel-body">
        <div class="body">
            <form action="/lineups/{{$lineup->id}}/" method="GET">
                <div class="form-group">
                    <label for="network">Network</label>
                    <select name="network" id="network" class="form-control">
                        <option value="">By Network:</option>
                        @foreach(\Social\Network::all() as $n)
                            <option value="{{$n->id}}" {{old('network') == $n->id ? 'selected' : ''}} >{{$n->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fromdate">From</label>
                    <div class='input-group date' id='fromdate'>
                        <input type='text' class="form-control" placeholder="yyyy-mm-dd" name="from"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="todate">To</label>
                    <div class='input-group date' id='todate'>
                        <input type='text' class="form-control" placeholder="yyyy-mm-dd" name="to"/>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
                <div class="form-group">
                    <a href="/lineups/{{$lineup->id}}"><button type="button" class="btn btn-default">Clear Filters</button></a>
                </div>
            </form>
        </div>
    </div>
</div>