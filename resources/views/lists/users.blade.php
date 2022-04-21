@extends('master.main',['Title'=>'Bicycle','Title1'=>'Bicycle','Title2'=>'Country','Title3'=>'User','Title4'=>'ContactUs'
,'RefTitle'=>'http://127.0.0.1:8000/bicycles','RefTitle2'=>'http://127.0.0.1:8000/countries',
'RefTitle3'=>'http://127.0.0.1:8000/users','RefTitle4'=>'http://127.0.0.1:8000/users'])


@section('content')

    @component('components.table.tablebase3',['title'=>'Users','object'=>$users])
    @endcomponent
@endsection
