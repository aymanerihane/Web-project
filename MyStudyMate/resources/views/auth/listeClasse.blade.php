@php
    if(isset($_GET['class'])){
        $id = $_GET['class'];
        $classes = app('App\Http\Controllers\classes')->showClasfil($id);
    }
@endphp
<input id="filid" value="{{$id}}" hidden>
<table>
    @if($classes->count() > 0)
    <tr>
        <th>Nom</th>
        <th>Nombre etudiant</th>
        <th>Suprimer</th>
    </tr>
    @foreach ($classes as $classe)
            <tr>
                <td>{{ $classe->nom }}</td>
                <td>{{ $classe->nbrEtudiants }}</td>
                <td class="supclass" data-id="{{$classe->id_classe}}" >X</td>
            </tr>
        @endforeach
        @else
            <tr>
                <th>no classe has been created yet</th>
            </tr>
    @endif

</table>
