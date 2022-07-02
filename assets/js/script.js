function cancelar(id){
    let modelo = document.getElementById(id);
    modelo.innerHTML = '';
    
}
function btn_cancelar(){
    cancelar('box_modelo');
    cancelar('box_marca');
    cancelar('box_ano');
    cancelar('box_preco');
}
function deletar(id){
    console.log('Delete', id);
}
function editar(id){
    console.log('Edit', id);
}