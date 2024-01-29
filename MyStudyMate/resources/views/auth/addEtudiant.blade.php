<div class="signbox">
    <form style="width:100%;" class="formSign" method="POST" action="{{ route('auth.addEtudiant')}}">
        @csrf
        <div class="nom">
            <input id="nom" type="text"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label class="labelf">
                <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">O</span><span style="transition-delay:100ms">M</span>
            </label>

        </div>
        @csrf
        <div class="email">
            <input id="prenom" name="prenom" required style="margin-bottom: 10px;">
            <label class="labelf">
                <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">R</span><span style="transition-delay:100ms">E</span><span style="transition-delay:150ms">N</span><span style="transition-delay:200ms">O</span><span style="transition-delay:250ms">M</span>
            </label>

        </div>

        <div class="salle">
            <Label style="text-align: center">Type :</Label><br>
            <span class="custom-dropdown small">
                <Select id="selectRole" class="select" name="role" space>
                            <option class="option" value="" disabled selected>Type</option>
                            <option class="option" value="2">Professeur</option>
                            <option class="option" value="3">Etudiant</option>

                </Select>
            </span>
        </div>
        <div class="salle" id="isdeleg" style="display: none;flex-direction: column;align-items: center;">
        <Label>Delegue :</Label><br>
            <span class="custom-dropdown small">
                <Select class="select" name="deleg" style="margin-bottom: 15px;">
                            <option class="option" value="0">Non</option>
                            <option class="option" value="1">Oui</option>
                </Select>
            </span>
            <div style="display: flex;justify-content: space-between;align-items: center;">
                <div style="flex: 1">
<Label>Formation :</Label><br>
<span class="custom-dropdown small" >
@php
$formations=app('App\Http\Controllers\formation')->showFormation();
@endphp
<Select class="select"  id="etudfor" style="margin-bottom: 15px;">
@foreach ($formations as $formation)
<option class="option" value="{{$formation->id_formation}}">{{$formation->nomformation}}</option>
@endforeach
</Select>
</span>
</div>
<div id="modeetud"></div>
</div>
<div class="email" style="flex: 1;margin-top: 20px;">
    <input type="text" name="cne"  style="margin-bottom: 0px;">
    <label class="labelf">
        <span style="transition-delay:0ms">C</span><span style="transition-delay:50ms">N</span><span style="transition-delay:100ms">E</span>
    </label>
</div>

</div>


<div class="salle" id="isprof" style="display: none;flex-direction: column;align-items: center;">
<Label>ROLE :</Label><br>
<span class="custom-dropdown small" style="margin-bottom: 35px;">
    <Select class="select" name="prof" >
        <option class="option" value="1">Chef Departement</option>
        <option class="option" value="2">Responsable Filiere</option>
        <option class="option" value="0">Aucun</option>
    </Select>
</span>

<div class="email">
    <input type="text" name="matricule" >
    <label class="labelf">
        <span style="transition-delay:0ms">M</span><span style="transition-delay:50ms">A</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">I</span><span style="transition-delay:250ms">C</span><span style="transition-delay:300ms">U</span><span style="transition-delay:350ms">L</span><span style="transition-delay:400ms">E</span><span style="transition-delay:450ms">
    </label>
</div>

</div>
@error('email')
<span class="invalid" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
@error('password')
<span class="invalid" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror

<div class="sb">
<button type="submit">
    <div class="btnLogin"><span>REGISTER</span></div>
  </button>


</div>
</form>
</div>
{{-- @php
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['name'];
$password=$_POST['password'];
$isRole=4;

}
@endphp --}}
