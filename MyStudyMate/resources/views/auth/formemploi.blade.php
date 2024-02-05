@vite(['resources/js/admin_ajax.js'])
@php
    if(isset($_GET['module'])){
$id=$_GET['module'];
$modules = app('App\Http\Controllers\modules')->select($id);
$fil = app('App\Http\Controllers\filieres')->findfil($id);
}
@endphp
<Label>Local :</Label><br>
                                        <span class="custom-dropdown small" >
                                            <Select class="select" name="local" style="margin-bottom: 15px;" required>
                                                <option value="0">Salle</option>
                                                @php
                                        $salles = app('App\Http\Controllers\Locals')->getlocaldep($fil->id_departement);
                                        @endphp
                                                @foreach($salles as $salle)
                                                <option value="{{ $salle->id_local }}">{{ $salle->nom }}</option>
                                                @endforeach
                                            </Select>
                                        </span><br>

<Label>Module :</Label><br>
     <span class="custom-dropdown small" >
     <Select class="select" name="module" style="margin-bottom: 15px;font-size: 10px">
    <option value="0"></option>
    @foreach($modules as $module)
    <option value="{{ $module->id_module }}">{{ $module->nom }}</option>
    @endforeach
    </Select>
    </span>
