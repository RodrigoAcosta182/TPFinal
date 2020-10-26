function agregaform(datos){
    d= datos.split('||');

    $('#idpersona').val(d[0]);
    $('#nombre').val(d[1]);
    $('#apellido').val(d[2]);
    $('#email').val(d[3]);
    $('#password').val(d[4]);
    $('#active').val(d[5]);
}