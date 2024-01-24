@vite(["resources/css/fileUpload.css","resources/js/admin_ajax.js"])
<div class="signbox" >
    <form style="flex: 1;justify-content: center;" id="editAnnonce" class="formSign" method="POST">
        @csrf
        <div class="nom">
            <input id="title" type="text" name="title" required autofocus>
            <label class="labelf">
                <span style="transition-delay:0ms">T</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">T</span><span style="transition-delay:150ms">R</span><span style="transition-delay:200ms">E</span>
            </label>

        </div>
        <div class="email">
            <input type="text" name="resume" name="resume" id="resume"  required >
            <label class="labelf">
                <span style="transition-delay:0ms">R</span><span style="transition-delay:50ms">E</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">U</span><span style="transition-delay:200ms">M</span><span style="transition-delay:250ms">E</span><span style="transition-delay:300ms">R</span>
            </label>

        </div>
        <div class="email">
            <input type="text" name="disc" id="disc" required >
            <label class="labelf">
                <span style="transition-delay:0ms">D</span><span style="transition-delay:50ms">I</span><span style="transition-delay:100ms">S</span><span style="transition-delay:150ms">C</span><span style="transition-delay:200ms">R</span><span style="transition-delay:250ms">I</span><span style="transition-delay:300ms">P</span><span style="transition-delay:350ms">T</span><span style="transition-delay:400ms">I</span><span style="transition-delay:450ms">O</span><span style="transition-delay:500ms">N</span>
            </label>

        </div>

            <div class="zone">

                <div id="dropZ">
                  <div>Drag and drop your file here</div>
                  <span>OR</span>
                  <div class="selectFile">
                     <input type="file" name="files[]" id="fileInput" multiple>
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

