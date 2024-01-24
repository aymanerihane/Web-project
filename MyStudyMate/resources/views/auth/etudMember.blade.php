@php
    $allMembers = app('App\Http\Controllers\addEtudiant')->etudMember();
@endphp
@foreach ($allMembers as $allMember)
    <tr>
        <td>{{ $allMember->name }}</td>
        <td>{{ $allMember->email }}</td>
        <td>{{ $allMember->password }}</td>
        <td>Etudiants</td>
    </tr>
@endforeach
