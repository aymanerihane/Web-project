@php
                $filieres = app('App\Http\Controllers\filieres')->showFilieres();
                @endphp
                <table>
                    <tr>
                        <th>NOM FILIERE</th>
                        <th>CONTENU FILIERE</th>
                    </tr>

                    @foreach ($filieres as $filiere)
                    <tr>
                        <td>{{ $filiere->nom }}</td>
                        <td>{{ $filiere->contenuFiliere }}</td>
                    </tr>
                    @endforeach
                </table>
