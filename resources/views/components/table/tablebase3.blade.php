<h1>{{$title}}</h1>

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Created_at</th>
        <th scope="col">Updated_at</th>
        <th scope="col">Bicycles_name</th>
        <th scope="col">Country_name</th>
    </tr>
    </thead>
    <tbody>
    @for($i=0;$i<count($object);$i++)
        <tr>
            <th scope="row">{{$object[$i]->id}}</th>
            <td>{{$object[$i]->name}}</td>
            <td>{{$object[$i]->created_at}}</td>
            <td>{{$object[$i]->updated_at}}</td>
            <td>
                @foreach($object[$i]->bicycles as $bicycle)
                    {{$bicycle->name}}
                @endforeach
            </td>
            <td>{{$object[$i]->country->name}}</td>
        </tr>
    @endfor
    </tbody>
</table>
