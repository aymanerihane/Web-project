
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
    $allMembers = app('App\Http\Controllers\addEtudiant')->profMember();
    @endphp
    @foreach ($allMembers as $allMember)
        <tr>
            <td>{{ $allMember->name }}</td>
            <td>{{ $allMember->email }}</td>
            <td>{{ $allMember->password }}</td>
            <td>Professeur</td>
        </tr>
    @endforeach

</table>
