let loadMoreBtn=document.querySelector('#load-more');
let currentItem=8;

window.onload = function(){
    $('#onload').fadeOut();
    $('body').removeClass('hidden');
}

loadMoreBtn.onclick=()=>{
    let boxes=[...document.querySelectorAll('.box-container .box')];
    for(var i=currentItem;  i<currentItem +4;i++){
        boxes[i].style.display='inline-block';
    }
    currentItem += 4;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display='none'
    }
}

//funcionamiento del carrito
const carrito=document.getElementById('carrito');
const elementos1=document.getElementById('lista-1');
const lista=document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn=document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners(){
    elementos1.addEventListener('click',comprarElemento);
    carrito.addEventListener('click',eliminarElemento);    
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

function comprarElemento(e){
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')){
        const elemento=e.target.parentElement.parentElement;
        leeerDatosElemento(elemento);
    }
}

function leeerDatosElemento(elemento){
    const infoElemento={
        imagen:elemento.querySelector('img').src,
        titulo:elemento.querySelector('h3').textContent,
        precio:elemento.querySelector('.precio').textContent,
        id: elemento.querySelector('a').getAttribute('data-id')
    }
    insertarCarrito(infoElemento);

}

function insertarCarrito(elemento){
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width=100 height=150px >
        </td>
        <td>
            ${elemento.titulo}
        </td>
        <td>
            ${elemento.precio}
        </td>
        <td>
            <a herf="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e){
    e.preventDefault();
    let elemento,
        elementoId;

    if(e.target.classList.contains('borrar')){
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');
    }
}

function vaciarCarrito(){
    while(lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    return false;
}

function generarPDF(){
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.setFontSize(18);
    doc.text('Reporte de Compra', 10, 10);

    const carritoItems = $('#lista-carrito tbody tr');
    let y = 20;

    carritoItems.each(function() {
        const imagen = $(this).find('td img').attr('src');
        const nombre = $(this).find('td').eq(1).text();
        const precio = $(this).find('td').eq(2).text();

        if (imagen) {
            const imgData = new Image();
            imgData.src = imagen;
            doc.addImage(imgData, 'PNG', 10, y, 20, 20);
        }

        doc.text(`Nombre: ${nombre}`, 40, y + 10);
        doc.text(`Precio: ${precio}`, 40, y + 20);

        y += 30;
    });

    doc.save('reporte_compra.pdf');
}