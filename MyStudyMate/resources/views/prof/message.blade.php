@php
if(isset($_GET['etud'])){
$id=$_GET['etud'];
$message=app('App\Http\Controllers\Demande')->findmessage($id);
}
@endphp
<div style="width: 100%;display: flex;justify-content: space-between;align-items: center;">
    <h3 class="NameOfEtud">{{app('App\Http\Controllers\Demande')->findetud($message->CNE)}}</h3>
    <div class="time" >{{$message->created_at}}</div>

</div>
<h4 class="email">aymane.rihane@etu.uae.ac.ma</h4>
<h4 class="objectDemande">{{$message->DescripDemande}}</h4>
<p class="messageDISC">{{$message->objet}}</p>
