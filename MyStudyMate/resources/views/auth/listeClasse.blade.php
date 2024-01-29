<table>
    @php
    $classes = app('App\Http\Controllers\classes')->showClasses();
    @endphp
    @if($classes->count() > 0)
        @foreach ($classes as $classe)
            <tr>
                <th>Nom</th>
                <th>Nombre etudiant</th>
                <th>Suprimer</th>
            </tr>
            <td>{{ $classe->nom }}</td>
            <td>{{ $classe->nbrEtudiant }}</td>
            <td>X</td>
        @endforeach
        @else
            <tr>
                <th>no classe has been created yet</th>
            </tr>
    @endif

</table>
