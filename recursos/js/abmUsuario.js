function agregaform(datos){
    d= datos.split('||');

    $('#nombre').val(d[0]);
    $('#apellido').val(d[1]);
    $('#email').val(d[2]);
    $('#password').val(d[3]);
    $('#active').val(d[4]);

}