    <div class="signbox">
        <form class="formSign" method="post" action="{{ route('login') }}">
            <div class="nom">
                <input id="nom" type="text" name="nom"  required  autofocus>
                <label class="labelf">
                    <span style="transition-delay:0ms">N</span><span style="transition-delay:50ms">O</span><span style="transition-delay:100ms">M</span>
                </label>

            </div>
            @csrf
            <div class="email">
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label class="labelf">
                    <span style="transition-delay:0ms">E</span><span style="transition-delay:50ms">M</span><span style="transition-delay:100ms">A</span><span style="transition-delay:150ms">I</span><span style="transition-delay:200ms">L</span><span style="transition-delay:250ms"> </span><span style="transition-delay:300ms">A</span><span style="transition-delay:350ms">D</span><span style="transition-delay:400ms">R</span><span style="transition-delay:450ms">E</span><span style="transition-delay:500ms">S</span><span style="transition-delay:550ms">S</span>
                </label>

            </div>
            @error('email')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="password">
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label class="labelf">
                    <span style="transition-delay:0ms">P</span><span style="transition-delay:50ms">A</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">S</span><span style="transition-delay:200ms">W</span><span style="transition-delay:250ms">O</span><span style="transition-delay:300ms">R</span><span style="transition-delay:350ms">D</span>
                </label>


            </div>
            <div class="password">
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label class="labelf">
                    <span style="transition-delay:0ms">C</span><span style="transition-delay:50ms">O</span><span style="transition-delay:100ms">N</span><span style="transition-delay:150ms">F</span><span style="transition-delay:200ms">I</span><span style="transition-delay:250ms">R</span><span style="transition-delay:300ms">M</span><span style="transition-delay:350ms">E</span> <span style="transition-delay:400ms">P</span><span style="transition-delay:450ms">A</span><span style="transition-delay:500ms">S</span><span style="transition-delay:550ms">S</span><span style="transition-delay:600ms">W</span><span style="transition-delay:650ms">O</span><span style="transition-delay:700ms">R</span><span style="transition-delay:750ms">D</span>
                </label>


            </div>
            @error('password')
                <span class="invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="check">
                <label class="containerCheck">
                    <input type="checkbox" class="check" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <svg viewBox="0 0 64 64" height="16px" width="16px">
                      <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                    </svg>
                  </label>
                  <label class="remember" for="remember">
                    {{ __('Remember Me') }}
                </label>

            </div>
            <div class="sb">
                <button>
                    <div class="btnLogin"><span class="spn2">{{ __('Login') }}</span></div>
                  </button>
                @if (Route::has('password.request'))
                    <a class="pasForget" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </div>
        </form>
        <div class="img"><img src="{{ asset('storage/images/sign2.png') }}" alt="sign"></div>
    </div>
