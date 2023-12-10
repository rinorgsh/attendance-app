@extends('canevas')

@section('title', 'Liste des étudiants')

@section('content')
    @if(count($students) > 0)
        @include('display_students', ['students' => $students])
    @else
        <div class="alert alert-danger" role="alert" style="text-align:center;margin-right:auto;margin-left:auto;margin-top:1%;max-width:50%;"> 
            Aucun <strong>étudiant</strong> n'est actuellement inscrit
        </div>
    @endif
    <div style="text-align:center;margin-right:auto;margin-left:auto;">
        <form action="/students/addStudent" method="POST">
            @csrf
            <div class="mb-3">
                <!-- le matricule -->
                <label class="form-label" style="margin-top:2%;">Matricule</label>
                <input type="text" name="id" class="form-control" style="width:50%;display:block;margin-right:auto;margin-left:auto;" required>
                <!-- le prénom -->
                <label class="form-label" style="margin-top:2%;">Prénom</label>
                <input type="text" name="first_name" class="form-control" style="width:50%;display:block;margin-right:auto;margin-left:auto;" required>
                <!-- le Nom de famille -->
                <label class="form-label" style="margin-top:2%;">Nom de famille</label>
                <input type="text" name="last_name" class="form-control" style="width:50%;display:block;margin-right:auto;margin-left:auto;" required>
                <!-- bouton-->
                <button type="submit" class="btn btn-primary" style="margin-top:2%;">Ajouter l'étudiant</button>
            </div>
        </form>
    </div>
</div>
@endsection
