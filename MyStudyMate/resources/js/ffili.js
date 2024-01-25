document.addEventListener('DOMContentLoaded', function () {
    // Masquer toutes les cellules de données sauf les en-têtes
    var dataCells = document.querySelectorAll('.contenufilier .td');
    dataCells.forEach(function (cell) {
        cell.classList.add('hidden');
    });

});
document.addEventListener('click',(event)=>{
    console.log(event.target)
    if(event.target.classList.contains('th1')){
        toggleColumn(0)
    }else if(event.target.classList.contains('th2')){
        toggleColumn(1)
    }else if(event.target.classList.contains('th3')){
        toggleColumn(2)
    }else if(event.target.classList.contains('th4')){
        toggleColumn(3)
    }
});

function toggleColumn(columnIndex) {
    var table = document.querySelector('.contenufilier table');
    var rows = table.querySelectorAll('.table-row');

    // Retirez la classe 'active' de toutes les cellules du header
    var headerCells = document.getElementById('header').querySelectorAll('th');
    headerCells.forEach(function (cell) {
        cell.classList.remove('active');
    });

    // Ajoutez la classe 'active' à la cellule du header cliquée
    headerCells[columnIndex].classList.add('active');

    // Parcours chaque ligne et masque les cellules non désirées
    rows.forEach(function (row) {
        var cells = row.children;
        for (var i = 0; i < cells.length; i++) {
            if (i === columnIndex) {
                cells[i].classList.remove('hidden');
            } else {
                cells[i].classList.add('hidden');
            }
        }
    });
}
