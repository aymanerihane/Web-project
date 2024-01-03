@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in as Responsable service Pedagogique!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contAllOp">

    <div class="conatinerAd">
            <div id="nav-bar">
                <input id="nav-toggle" type="checkbox"/>
                <div id="nav-header"><h1 id="nav-title">Menu</h1>
                    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
                    <hr/>
                </div>
                <div id="nav-content">
                    <div class="nav-button"><span>Gestion des emplois du temps</span></div>
                    <div class="nav-button"><span>Affectation des Salle</span></div>
                    <div class="nav-button"><span>Modification du role des professeurs</span></div>
                    <hr/>
                    <div class="nav-button"><span>Inscrire d'une nouvelle classe dans un module</span></div>
                    <div class="nav-button"><span>Ajouter et modifier le contenu d'une filière</span></div>

                <div id="nav-content-highlight"></div>
            </div>
            <input id="nav-footer-toggle" type="checkbox"/>
        </div>
    </div>
    <div class="center">

        <div class="manup">
            <div class="GestionEmplois">
                <div class="salle">
                    <Label>Salle :</Label><br>
                    <Select>
                        @php
                        $salles = app('App\Http\Controllers\Locals')->showLocals();
                        @endphp
                        @if($salles->count() > 0)
                            @foreach ($salles as $salle)
                                <option value="{{ $salle->id_salle }}">{{ $salle->nom }}</option>
                            @endforeach
                        @else
                            <option value="">aucune salle n'est disponible</option>
                        @endif
                    </Select>
                </div>
                <div class="departement">
                    <Label>Département</Label><br>
                    <select name="" id="">
                        @php
                        $departements = app('App\Http\Controllers\Departements')->showDepartements();
                        @endphp
                        @foreach ($departements as $departement)
                            <option value="{{ $departement->id_departement }}">{{ $departement->nom }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button>Associer</button>
        </div>
    </div>
</div>

@endsection
