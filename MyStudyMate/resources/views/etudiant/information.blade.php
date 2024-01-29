<style>
    tr{
        height: 100px;
    }
</style>
@php
    $etud=app('App\Http\Controllers\addetudiant')->findetud();
@endphp
<table  id="tableMember" border="1">
    <tr>
        <th>Nom</th>
        <td>{{auth()->user()->name}}</td>
    </tr>
    <tr>
        <th>CNE</th>
        <td>{{$etud->CNE}}</td>
    </tr>
    <tr>
        <th>Filliere</th>
        <td>{{app('App\Http\Controllers\filieres')->findfil($etud->id_Filiere)->nom}}</td>
    </tr>
        <tr>
            <th>Email</th>
        <td>{{auth()->user()->email}}</td>
    </tr>
</table>
