var tableUser;

$(document).ready(function () {
    //alert('ada')
    datatable()
})

function datatable(){
    $.ajax({
        url: "/api/user/datatable",
        type: "GET",
        success: function (result, status) {
            console.log(result)
            var data = result;
            var rowData = ''
            $('.rowData').html('')
            $.each(data, function (i, val) {
                rowData += '<tr><td>'+val.id+'</td> <td>'+val.name+'</td><td>'+val.email+'</td>></tr>';
            });
            $('.rowData').append(rowData)
        },
        complete: function(){

        },
        errors: function (e, status) {
            console.log(e);
        },
    });
}
