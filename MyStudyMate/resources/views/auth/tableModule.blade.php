@php
    if(isset($_GET['module'])){
        $id = $_GET['module'];
        $modules = app('App\Http\Controllers\modules')->select($id);
    }
@endphp
<input id="filid" value="{{$id}}" hidden>
<table>
    @if($modules->count() > 0)
    <tr>
        <th>Nom</th>
        <th>Respnsable</th>
        <th>Suprimer</th>
    </tr>
    @foreach ($modules as $module)
    @php
        $prof = app('App\Http\Controllers\addEtudiant')->findprof($module->MatriculeProf);
        $pr = app('App\Http\Controllers\addEtudiant')->finduser($prof->id_Utilisateur);
    @endphp
            <tr>
                <td>{{ $module->nom }}</td>
                <td>{{ $pr->name }}</td>
                <td class="supmod" data-id="{{$module->id_module}}" style="cursor: pointer">X</td>
            </tr>
        @endforeach
        @else
            <tr>
                <th>no classe has been created yet</th>
            </tr>
    @endif

</table>
