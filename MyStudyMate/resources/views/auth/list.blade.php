@vite(['resources/js/annonce.js'])
<h1 class="h1">Liste des membres</h1>

<label>Type de Membre :</label><br>
<span class="custom-dropdown small" style="margin-bottom: 35px;">
    <select id="memberType" name="memberType" class="select">
        <option value="0">All</option>
        <option value="1">Etudiant</option>
        <option value="2">Professeur</option>
    </select>
</span>
<div id="center"> @include('auth.allMembers')</div>
