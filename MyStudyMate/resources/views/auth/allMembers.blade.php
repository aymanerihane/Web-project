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
        $allMembers = app('App\Http\Controllers\addEtudiant')->allMember();
    @endphp
    @foreach ($allMembers as $allMember)
        <tr>
            <td>{{ $allMember->name }}</td>
            <td>{{ $allMember->email }}</td>
            @if ($allMember->is_role == 2)
            @php
        $prof = app('App\Http\Controllers\addEtudiant')->findprofe($allMember->id);
           @endphp
            <td>{{ $prof->MatriculeProf }}</td>
            @elseif ($allMember->is_role == 3)
            @php
        $etud = app('App\Http\Controllers\addEtudiant')->findetude($allMember->id);
            @endphp
            <td>{{ $etud->CNE }}</td>
                @endif
            <td>
                @if ($allMember->is_role == 2)
                    Professeur
                @elseif ($allMember->is_role == 3)
                    Etudiants
                @endif
            </td>
        </tr>
    @endforeach

</table>


