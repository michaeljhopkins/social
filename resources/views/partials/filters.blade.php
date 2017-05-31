<div class="panel panel-default">
    <div class="panel-heading">
        <div class="level">
            <h4 class="flex">Filters</h4>
        </div>
    </div>
    <div class="panel-body">
        <div class="body">
            <form action="{{$url}}" method="GET">
                <div class="form-group">
                    <label for="network">Network</label>
                    <select name="network" id="network" class="form-control">
                        <option value="">By Network:</option>
                        @foreach($networks as $n)
                            <option value="{{$n->id}}">{{$n->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="fromdate">From</label>
                    <div class='input-group date' id='fromdate'>
                        <input type='text' class="form-control" placeholder="yyyy-mm-dd"
                               name="from" value="{{ (request('from') != '' && request('from') != null) ? request('from') : ''}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="todate">To</label>
                    <div class='input-group date' id='todate'>
                        <input type='text' class="form-control" placeholder="yyyy-mm-dd"
                               name="to" value="{{ (request('to') != '' && request('to') != null) ? request('to') : ''}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
                <div class="form-group">
                    <a href="{{$url}}"><button type="button" class="btn btn-default">Clear Filters</button></a>
                </div>
            </form>
        </div>
    </div>
</div>