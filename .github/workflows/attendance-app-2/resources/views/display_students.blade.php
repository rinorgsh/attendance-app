<table class="table">
    <thead>
        <tr class="text-center">
            <th scope="col">Matricule</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom de famille</th>
            <th scope="col" class="col-3"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr class="text-center">
            <td id="{{ $student->id }}">{{ $student->id }}</td>
            <td id="{{ $student->id }}-fn"> {{ $student->first_name }}</td>
            <td id="{{ $student->id }}-ln"> {{ $student->last_name }}</td>
            <td class="w-auto">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    onclick="setUpData({{$student->id}})">
                    Modifier
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modification des informations</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/students/updateStudent" method="POST" class="d-inline-block">
                                    <input type="number" id="modal-id" name="id" hidden>
                                    @csrf
                                    <!-- Ligne pour le prénom -->
                                    <div class="mb-3 row">
                                        <label for="firstName">Prenom :</label>
                                        <input type="text" class="form-control" id="modal-fn" name="first_name"
                                            required>
                                    </div>
                                    <!-- Ligne pour le nom de famille -->
                                    <div class="mb-3 row">
                                        <label for="lastName">Nom de famille :</label>
                                        <input type="text" class="form-control" id="modal-ln" name="last_name" required>
                                    </div>
                                    <!-- Ligne pour les boutons -->
                                    <div class="modal-footer">
                                        <div class="mb-3 col">
                                            <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="/students/removeStudent" method="POST" class="d-inline-block">
                    @csrf
                    <input id="rmID" name="id" type="hidden" value="{{$student->id}}">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>

                <form action="/students/{{$student->id}}" method="GET" class="d-inline-block">
                    <input id="rmID" name="id" type="hidden" value="{{$student->id}}">
                    <button type="submit" class="btn btn-secondary">Consulter</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<script>
function setUpData(id) {
    firstName = document.getElementById(`${id}-fn`).innerText;
    lastName = document.getElementById(`${id}-ln`).innerText;
    document.getElementById('modal-id').value = id;
    document.getElementById('modal-fn').value = firstName;
    document.getElementById('modal-ln').value = lastName;
}
</script>