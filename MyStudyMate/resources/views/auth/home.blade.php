@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Responsable service Pedagogique!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <Select name="optionsAdmin" id="optionsAdmin">
        <option value="emplois">Gestion des emplois du temps</option>
        <option value="affectationSalle">Affectation des Salles</option>
        <option value="modifierProf">Modufication du role des professeurs</option>
        <option value="inscritClass">Inscrire d'une nouvelle classe dans un module</option>
        <option value="editerFil">Ajouter et modifier le contenu d’une filière</option>
    </Select>
    
</div>
@endsection
