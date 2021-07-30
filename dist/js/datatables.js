var SITEURL = window.location.origin + '/sis_pedidos/index.php/';

$('#tabla_productos').DataTable({
    "responsive": true,
    // "processing": true,
    "autoWidth": true,
    "iDisplayLength": 100,
    "columnDefs": [{
        "searchable": false,
        "orderable": false,
        "targets": 0
    }],
    "ajax": SITEURL + "Productos_c/datosAjax",
    "order": [
        [1, 'asc']
    ],
    // "data": res.data,
    "columns": [{
        "defaultContent": ""
    }, {
        "data": "clave"
    }, {
        "data": "descripcion"
    }, {
        "data": "status"
    }, {
        "data": "cat_id"
    }, {
        "render": function (data, type, row,) {
            if (row.conteo != 0) {
                return "<span class='badge badge-primary'>boton</span>";
            } else {
                return "<span class='badge badge-danger'>boton</span>";
            }
        }
    }],
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    }
});
// REALIZA NUMERACION CONTINUA EN DATATABLE
$('#tabla_productos').DataTable().on('order.dt search.dt', function () {
    $('#tabla_productos').DataTable().column(0, {
        search: 'applied',
        order: 'applied'
    }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1;
    });
}).draw();
