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
    <div class="optionAD">
        <form class="formChoice" method="post" action="">
            <input type="radio" name="optionsAdmin" id="emplois" checked >
            <label for="emplois">Gestion des emplois du temps</label><br>
            <input type="radio" name="optionsAdmin" id="affectationSalle">
            <label for="affectationSalle">Affectation des Salles</label><br>
            <input type="radio" name="optionsAdmin" id="modifierProf">
            <label for="modifierProf">Modufication du role des professeurs</label><br>
            <input type="radio" name="optionsAdmin" id="inscritClass">
            <label for="inscritClass">Inscrire d'une nouvelle classe dans un module</label><br>
            <input type="radio" name="optionsAdmin" id="editerFil">
            <label for="editerFil">Ajouter et modifier le contenu d'une filière</label><br>
        </form>

        <div class="ad">
            <div class="optionAD">
                <form class="formChoice" method="post" action="">
                    <input type="radio" name="optionsAdmin" id="emplois" checked >
                    <label for="emplois">Gestion des emplois du temps</label><br>
                    <input type="radio" name="optionsAdmin" id="affectationSalle">
                    <label for="affectationSalle">Affectation des Salles</label><br>
                    <input type="radio" name="optionsAdmin" id="modifierProf">
                    <label for="modifierProf">Modufication du role des professeurs</label><br>
                    <input type="radio" name="optionsAdmin" id="inscritClass">
                    <label for="inscritClass">Inscrire d'une nouvelle classe dans un module</label><br>
                    <input type="radio" name="optionsAdmin" id="editerFil">
                    <label for="editerFil">Ajouter et modifier le contenu d'une filière</label><br>
                </form>



            </div>
            <div class="GestionEmplois">
                <div class="salle">
                    <Label>Salle :</Label><br>
                    <Select>
                        <option value="1">Salle 1</option>
                    </Select>
                </div>
                <div class="departement">
                    <Label>Département</Label><br>
                    <select name="" id="">
                        <option value="info">Département Info</option>
                    </select>
                </div>
            </div>
            <button>Associer</button>

        </div>


    </div>

</div>
@endsection
