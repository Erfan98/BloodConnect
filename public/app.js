$(document).ready( function () {
    $('#data').DataTable();
    $('input:checkbox').click(function() {
        $('input:checkbox').not(this).prop('checked', false);
    });

    $('input:checked,#district').change(function(){
        var district = $('#district').val();
        // if (this.checked) {
        //     var group = $(this).val()
        // }
        console.log(district);
    });

    //console.log($('#district :selected').text());
    // $('#district').change(function () {
    //     //console.log($(this).val())
    //   });

    // $('input:checkbox').change(function() {
    //     // this will contain a reference to the checkbox
    //     if (this.checked) {
    //         //console.log($(this).val())

    //         $.ajax({
    //             type: "GET",
    //             url: "/filter?group="+encodeURIComponent($(this).val()),
    //             success: function (response) {
    //                 console.log(response)
    //                 $('#data tbody').empty();
    //                 var total = Object.keys(response).length;
    //                 for(var i =0;i<total;i++){
    //                    // console.log(response[i].name)
    //                     $('#data tbody').append('<tr><td>'+response[i].id+'</td><td>'+response[i].name+'</td><td>'+response[i].age+'</td><td>'+response[i].group+'</td><td>'+response[i].city+'</td><td>'+response[i].district+'</td><td>'+response[i].phone+'</td><td>'+response[i].email+'</td><td>'+moment(response[i].updated_at).fromNow()+'</td></tr>');
    //                 }

    //                 //$('#data tr:last').after('<tr>...</tr><tr>...</tr>');

    //             }
    //         });
    //     } else {
    //         //console.log("unchecked")
    //     }
    // });
} );
