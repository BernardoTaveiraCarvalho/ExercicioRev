<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">User_name</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($object);$i++)
        <tr>
            <th scope="row">{{$object[$i]->id}}</th>
            <td>{{$object[$i]->created_at}}</td>
            <td>{{$object[$i]->updated_at}}</td>
            <td>{{$object[$i]->user->name}}</td>
        </tr>
    @endfor
    </tbody>
</table>
