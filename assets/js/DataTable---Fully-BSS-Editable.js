$(document).ready(function() {
    $('.mydatatable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'excel', 'pdf', 'print'
        ],
        scrollY: false,
        scrollX: true,
        autoWidth: false,
        scrollCollapse: false,
        paging: true
    });
});