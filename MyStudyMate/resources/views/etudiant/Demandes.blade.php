
<label>Type Demandess :</label><br>
<span class="custom-dropdown small" style="margin-bottom: 35px;">
    <select id="DemandesType" name="memberType" class="select">
        <option value="1">Demande lettre</option>
        <option value="0">Demande changement groupe Tp</option>
        <option value="2">Demandes Rendez-vous</option>
    </select>
</span>

<div id="center">
    @include('etudiant.demandeLettre')
</div>
