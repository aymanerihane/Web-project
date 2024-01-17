@vite(["resources/css/fileUpload.css","resources/js/file.js"])
<div class="signbox" >
    <form style="flex: 1;justify-content: center;" class="formSign" method="POST" action="{{ route('auth.addEtudiant')}}">
        @csrf
        <div class="nom">
            <input id="nom" type="text"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label class="labelf">
                <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">E</span>
            </label>

        </div>
        @csrf
        <div class="email">
            <input id="email" type="text">
            <label class="labelf">
                <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">C</span><span style="transition-delay:200ms">R</span><span style="transition-delay:250ms">I</span><span style="transition-delay:300ms">P</span><span style="transition-delay:350ms">T</span><span style="transition-delay:400ms">I</span><span style="transition-delay:450ms">O</span><span style="transition-delay:500ms">N</span>
            </label>

        </div>

        <div class="container-file">
            <div class="row">
                <div class="twelve column" style="margin-top: 5%">
                    <h4>Multiple File Upload Form</h4>
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <input type="file" name="file[]" multiple>
                        {{-- <input class="button-primary" type="submit" value="Submit"> --}}

                    </form>

                </div>
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


        <div class="sb" style="margin-left: auto;margin-right: auto;">
            <button type="submit">
                <div class="btnLogin"><span>{{ __('Register') }}</span></div>
              </button>
        </div>
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
