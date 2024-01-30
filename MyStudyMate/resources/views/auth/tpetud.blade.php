
@php
if(isset($_GET['classe'])){
$id=$_GET['classe'];
$classe=app('App\Http\Controllers\classes')->getclasse($id);
}
@endphp
<Label>Groupe TP :</Label><br>
<span class="custom-dropdown small" >
    <Select class="select" name="groupTP" style="margin-bottom: 15px;">
        <option class="option" value=""></option>

        @php
        $grptp = array();
        $nbr=$classe->nbrEtudiants/4;
     for ($i = 1; $i <= $nbr; $i++) {
        if(app('App\Http\Controllers\classes')->checksalle('groupe'.$i,$classe->id_classe))
      $groupes[] = 'groupe' . $i;
    else
    continue;
     }
    @endphp
    @foreach ($groupes as $groupe)
        <option class="option" value="{{ $groupe }}">{{ $groupe }}</option>
    @endforeach
    </Select>
</span>
