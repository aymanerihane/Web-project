@vite(['resources/js/admin_ajax.js'])
@php
    if(isset($_GET['module'])){
$id=$_GET['module'];
$modules = app('App\Http\Controllers\modules')->select($id);
}
@endphp

<Label>Module :</Label><br>
     <span class="custom-dropdown small" >
     <Select class="select" name="module" style="margin-bottom: 15px;">
    <option value="0"></option>
    @foreach($modules as $module)
    <option value="{{ $module->id_module }}">{{ $module->nom }}</option>
    @endforeach
    </Select>
    </span>
