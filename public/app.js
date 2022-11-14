$(document).ready( function () {
    $('#data').DataTable();
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });

    $('input:checkbox').change(function() {
        // this will contain a reference to the checkbox
        if (this.checked) {
            console.log($(this).val())
        } else {
            console.log(this)
        }
    });
} );
