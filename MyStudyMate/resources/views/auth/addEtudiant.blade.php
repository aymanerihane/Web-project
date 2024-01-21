
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
                <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <label class="labelf">
                    <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">R</span><span style="transition-delay:100ms">E</span><span style="transition-delay:150ms">N</span><span style="transition-delay:200ms">O</span><span style="transition-delay:250ms">M</span>
                </label>

            </div>

            <div class="salle">
                <Label>Type :</Label><br>
                <span class="custom-dropdown small">
                    <Select id="selectRole" class="select" name="role">
                                <option class="option" value="1">Admin</option>
                                <option class="option" value="2">Professeur</option>
                                <option class="option" value="3">Etudiant</option>

                    </Select>
                </span>
            </div>
            <div class="salle" id="isdeleg">
            <Label>Delegue :</Label><br>
                <span class="custom-dropdown small">
                    <Select class="select" name="deleg">
                                <option class="option" value="0">Non</option>
                                <option class="option" value="1">Oui</option>
                    </Select>
                </span>

            </div>
            <div class="salle" id="isprof">
            <Label>ROLE :</Label><br>
                <span class="custom-dropdown small">
                    <Select class="select" name="prof">
                        <option class="option" value="1">Chef Departement</option>
                        <option class="option" value="2">Responsable Filiere</option>
                        <option class="option" value="3">Aucun</option>
                    </Select>
                </span>

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
                    <div class="btnLogin"><span>{{ __('Register') }}</span></div>
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
