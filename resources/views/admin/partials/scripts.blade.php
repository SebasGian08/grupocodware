<script src="{{ asset('admin/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugin/jsvectormap/world.js') }}"></script>

<script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/kaiadmin.min.js') }}"></script>

<script src="{{ asset('admin/assets/js/setting-demo2.js') }}"></script>
<script src="{{ asset('admin/assets/js/demo.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    $('#basic-datatables').DataTable({
        "pageLength": 10,
        "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

    $('.btn-delete').on('click', function(e) {
        e.preventDefault();

        let id = $(this).data('id');
        let name = $(this).data('name');
        let form = '#delete-form-' + id;

        Swal.fire({
            title: '¿Estás seguro que desea eliminar?',
            text: "El item será eliminado permanentemente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $(form).submit();
            }
        });
    });
});
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

@push('scripts')

@if(session('success'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        title: '¡Correcto!',
        text: @json(session('success')),
        icon: 'success',
        timer: 2500,
        showConfirmButton: false
    });
});
</script>
@endif

@if(session('delete'))
<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        title: 'Eliminado',
        text: @json(session('delete')),
        icon: 'success',
        timer: 2500,
        showConfirmButton: false
    });
});
</script>
@endif


@endpush
@stack('scripts')