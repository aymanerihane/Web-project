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
            <td>{{ $allMember->password }}</td>
            <td>
                @if ($allMember->is_role == 2 || $allMember->is_role == 3 || $allMember->is_role == 4)
                    Professeur
                @elseif ($allMember->is_role == 5)
                    Etudiants
                @else
                    NONE
                @endif
            </td>
        </tr>
    @endforeach

</table>

