<h1 class="h1">Liste des mombres</h1>

<Label>Type de Menbre :</Label><br>
                <span class="custom-dropdown small" style="margin-bottom: 35px;">
                    <select  name="menberType" class="select">
                        <option value="0">All</option>
                        <option value="1">Etudiant</option>
                        <option value="2">Proesseur</option>
                    </select>
                </span>
<table border="1">
    {{-- table of menberes --}}
    <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Password</th>
        <th >Role</th>
    </tr>


</table>

<script>
    function chnagerManupulation(url) {

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
        const center = document.querySelector(".center");
        document.querySelector(".center").innerHTML = xhr.responseText;
        setTimeout(function () {
            center.style.opacity = 1; // Set opacity to 1 to fade in the content
        }, 30);
    }

};



xhr.open("GET", url, true); //erreur
xhr.send();
}
</script>
