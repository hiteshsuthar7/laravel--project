<div class="container">
    @if($gt=Session::get('grt'))
    <div class="alter alter success">
        {{$gt}}
    </div>
    @endif;
    <table class="table table-striped">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Fees</th>
                <th>Discount</th>
                <th>After Discount</th>
            </tr>
        </thead>
        @foreach($data as $info)

        <tr>
            <td>{{$loop->itration}}</td>
            <td>{{$info['name']}}</td>

            <td>{{$info['description']}}</td>
            <td> After Discount</td>
        </tr>
        @endforeach
    </table>
</div>
