@vite(["resources/css/fileUpload.css","resources/js/file.js"])
<div class="signbox" >
    <form style="flex: 1;justify-content: center;" class="formSign" method="POST" action="">
        @csrf
        <div class="nom">
            <input id="nom" type="text"  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <label class="labelf">
                <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">E</span>
            </label>

        </div>
        @csrf
        <div class="email">
            <input  required >
            <label class="labelf">
                <span style="transition-delay:0ms">R</span><span style="transition-delay:50ms">E</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">U</span><span style="transition-delay:200ms">M</span><span style="transition-delay:250ms">E</span><span style="transition-delay:300ms">R</span>
            </label>

        </div>
        <div class="email">
            <input  required >
            <label class="labelf">
                <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">C</span><span style="transition-delay:200ms">R</span><span style="transition-delay:250ms">I</span><span style="transition-delay:300ms">P</span><span style="transition-delay:350ms">T</span><span style="transition-delay:400ms">I</span><span style="transition-delay:450ms">O</span><span style="transition-delay:500ms">N</span>
            </label>

        </div>

            <div class="zone">

                <div id="dropZ">
                  <i class="fa fa-cloud-upload"></i>
                  <div>Drag and drop your file here</div>
                  <span>OR</span>
                  <div class="selectFile">
                    <label for="file">Select file</label>
                    <input type="file" name="files[]" id="file">
                  </div>
                  <p>File size limit : 10 MB</p>
                </div>

              </div>

        <div class="sb">
            <button type="submit">
                <div style="margin-bottom: 0" class="btnLogin"><span>Submit</span></div>
              </button>


        </div>
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
