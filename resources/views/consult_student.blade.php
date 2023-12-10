@extends('canevas')

@section('title', 'Consultation étudiant')

@section('content')

<div class="container p-2">
    <h2>Page de l'étudiant</h2>
</div>
<div class="d-flex flex-column border">
@foreach ($student as $students)

        <div class="p-2">ID : {{$students->id}}</div>
        <div class="p-2">Prénom : {{$students->first_name}}</div>
        <div class="p-2">Nom : {{$students->last_name}}</div>
@endforeach
</div>

@endsection
