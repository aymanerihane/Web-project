@php
if(isset($_GET['etud'])){
$id=$_GET['etud'];
$message=app('App\Http\Controllers\Demande')->findmessage($id);
$etud=app('App\Http\Controllers\Demande')->findetud($message->CNE);
}
@endphp
<div style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
    <h3 class="NameOfEtud">{{$etud->name}}</h3>
    <div class="time" >{{$message->created_at}}</div>

</div>
<h4 class="email">{{app('App\Http\Controllers\Demande')->findetud($message->CNE)->email}}</h4>
<h4 class="objectDemande">{{$message->objet}}</h4>
<p class="messageDISC">{{$message->DescripDemande}}</p>
