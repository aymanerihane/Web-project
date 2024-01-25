
<label>Type Demandess :</label><br>
<span class="custom-dropdown small" style="margin-bottom: 35px;">
    <select id="DemandesType" name="memberType" class="select">
        <option value="1">Demande lettre</option>
        <option value="0">Demande changement groupe Tp</option>
        <option value="2">Demandes Rendez-vous</option>
        <option value="3">Justifier Absence</option>
        @php
        $isdelle = app('App\Http\Controllers\addEtudiant')->isDelegue();
        @endphp
        @if ($isdelle)
        <option value="4">Signaler Incidents Quotidiens</option>
        <option value="5">Signaler Pannes Matérielles</option>
        @endif
    </select>
</span>

<div id="center" style="position: relative">
    @include('etudiant.demandeLettre')
</div>
