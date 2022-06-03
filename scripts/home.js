const divMenuCardapio = `<div class="menu-itens btn-group" role="group" aria-label="Button group with nested dropdown">
<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">Pizza</button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
</div>
<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">Hambúrgueres</button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
</div>
<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">Sanduíches</button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
</div>
<button type="button" class="btn btn-warning">Acompanhamentos & saladas</button>
<div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle"
        data-bs-toggle="dropdown" aria-expanded="false">Combos</button>
    <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
        <li><a class="dropdown-item" href="#">Dropdown link</a></li>
    </ul>
</div>
<button type="button" class="btn btn-warning">Bebidas</button>
<button type="button" class="btn btn-warning">Sobremesas</button>
</div>`;



document.getElementById('menu-itens').innerHTML += divMenuCardapio
document.getElementById('menu-itens2').innerHTML += divMenuCardapio
document.getElementById('menu-itens3').innerHTML += divMenuCardapio

