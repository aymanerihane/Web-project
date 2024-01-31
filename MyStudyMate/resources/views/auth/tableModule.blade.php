@php
    if(isset($_GET['modules'])){
        $id = $_GET['modules'];
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
            <tr>
                <td>{{ $module->nom }}</td>
                <td>{{ $module->id_professeur_responsable }}</td>
                <td class="supclass" data-id="{{$module->id_module}}" style="cursor: pointer">X</td>
            </tr>
        @endforeach
        @else
            <tr>
                <th>no classe has been created yet</th>
            </tr>
    @endif

</table>
