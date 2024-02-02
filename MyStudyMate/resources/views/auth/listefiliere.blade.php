@php
    if(isset($_GET['fil'])){
        $id = $_GET['fil'];
        $filieres = app('App\Http\Controllers\filieres')->findfilfor($id);
    }
@endphp
<input id="filid" value="{{$id}}" hidden>
<table>
    @if($filieres->count() > 0)
    <tr>
        <th>Nom</th>
        <th>Departement</th>
        <th>Suprimer</th>
    </tr>
    @foreach ($filieres as $filiere)
            <tr>
                <td>{{ $filiere->nom }}</td>
                <td>{{ app('App\Http\Controllers\Departements')->finddep($filiere->id_departement)->nom }}</td>
                <td class="supfil" data-id="{{$filiere->id_filiere}}" style="cursor: pointer">X</td>
            </tr>
        @endforeach
        @else
            <tr>
                <th>no filiere has been created yet</th>
            </tr>
    @endif

</table>
