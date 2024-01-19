
@vite(["resources/CSS/annonce.css"])
<h1>Annonce list</h1>
<div class="listAnnonce">

    <div class="annonce-card add-card">
        <div id="addClick" class="imgholder imgholdera addClick">
            <svg class="iconAdd addClick" xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path class="addClick" fill="#fefefe" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
            {{-- <i class="fa-solid fa-plus fa-2xl iconAdd" style="color: #fff;"></i> --}}
        </div>
    </div>
    {{-- <?php

        try {
            $conn = new PDO("mysql:host=localhost:bdname=dev-projet;", "root", "");

            $stmt = $conn->prepare("SELECT title,resum,img FROM annonces");
            $stmt->execute();


        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            // Fetch data
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    ?> --}}
    <div class="annonce-card">
        <div id="delete" class="new">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" height="20" width="15" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by  @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path  fill="#fefefe" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </div>
        <div class="posinew edit">
            <svg class="icon edit" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#fefefe" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/></svg>
        </div>
        <div class="containerAnnonceText">
            <div class="imgholder">
            </div>
            <div class="containerAnnonceText">

                <h1 class="head-card"">Titre</h1>
                {{-- <h1 class="head-card""><?php $row['title'] ?></h1> --}}
                <p class="text-card">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis consectetur ullam</p>
                {{-- <p class="text-card"><?php $row['resum'] ?></p> --}}
            </div>
        </div>

    </div>
    {{-- <?php } ?> --}}
</div>
<script src="https://kit.fontawesome.com/e9d0d16c17.js" crossorigin="anonymous"></script>
