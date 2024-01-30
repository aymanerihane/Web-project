<table id="tableMember" border="1">
    {{-- table of membres --}}
    <tr id="first-tr">
        <th>Full Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Role</th>
    </tr>
    {{-- Dummy row for initialization --}}
    @php
    $allMembers = app('App\Http\Controllers\addEtudiant')->etudMember();
    @endphp
    {{-- @if (count(allMembers)>0) --}}
    @foreach ($allMembers as $allMember)
    @php
        $etud = app('App\Http\Controllers\addEtudiant')->findetude($allMember->id_Utilisateur);
    @endphp
        <tr>
            <td>{{ $allMember->name }}</td>
            <td>{{ $allMember->email }}</td>
            <td>{{ $etud->CNE }}</td>
            <td>Etudiants</td>
        </tr>
        @endforeach
        {{-- @else
        <tr>
            <th>no etudiants</th>
        </tr>
        @endif --}}

</table>

