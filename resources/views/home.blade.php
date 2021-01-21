@extends('layout.app')
@section('content')
   <ul>
     @foreach ($dresses as $dress )
       <li>{{ $dress->tipo }}</li>
       <li>{{ $dress->stile }}</li>
       <li>{{ $dress->genere }}</li>
       <li>{{ $dress->marca }}</li>
       <li>{{ $dress->prezzo }}</li>
     @endforeach
   </ul>
@endsection
