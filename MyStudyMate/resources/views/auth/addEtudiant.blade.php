
    <div class="signbox">
        <form class="formSign" method="POST" action="{{ route('auth.addEtudiant')}}">
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
                    <span style="transition-delay:0ms">E</span><span style="transition-delay:50ms">M</span><span style="transition-delay:100ms">A</span><span style="transition-delay:150ms">I</span><span style="transition-delay:200ms">L</span><span style="transition-delay:250ms"> </span><span style="transition-delay:300ms">A</span><span style="transition-delay:350ms">D</span><span style="transition-delay:400ms">R</span><span style="transition-delay:450ms">E</span><span style="transition-delay:500ms">S</span><span style="transition-delay:550ms">S</span>
                </label>

            </div>

            <div class="password">
                <input id="password" type="password"  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label class="labelf">
                    <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">A</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">S</span><span style="transition-delay:200ms">W</span><span style="transition-delay:250ms">O</span><span style="transition-delay:300ms">R</span><span style="transition-delay:350ms">D</span>
                </label>


            </div>
            <div class="password">
                <input id="password" type="password"  name="password_confirmation" required autocomplete="new-password">
                <label class="labelf">
                    <span style="transition-delay:0ms">C</span><span style="transition-delay:50ms">O</span><span style="transition-delay:100ms">N</span><span style="transition-delay:150ms">F</span><span style="transition-delay:200ms">I</span><span style="transition-delay:250ms">R</span><span style="transition-delay:300ms">M</span><span style="transition-delay:350ms">E</span> <span style="transition-delay:400ms">P</span><span style="transition-delay:450ms">A</span><span style="transition-delay:500ms">S</span><span style="transition-delay:550ms">S</span><span style="transition-delay:600ms">W</span><span style="transition-delay:650ms">O</span><span style="transition-delay:700ms">R</span><span style="transition-delay:750ms">D</span>
                </label>


            </div>
            <div class="salle">
                <Label>Role :</Label><br>
                <span class="custom-dropdown small">
                    <Select class="select" name="role" onclick="isdelegue(this)">
                                <option class="option" value="1">Admin</option>
                                <option class="option" value="2">Chef Departement</option>
                                <option class="option" value="3">Responsable Filiere</option>
                                <option class="option" value="4">Professeur</option>
                                <option class="option" value="5">Etudiant</option>

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
        <div class="img"><img src="{{ asset('storage/images/sign2.png') }}" alt="sign"></div>
    </div>
{{-- @php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $password=$_POST['password'];
        $isRole=4;

    }
@endphp --}}
