function playvideo(rolik) {
    $('.modal-body').find('iframe').attr('src', rolik)
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
    console.log(rolik);
}

function stopvideo() {
    $('.modal-body').find('iframe').attr('src', "")
}


// watch

window.onload = function () {
    var doblepix = ":";
    window.setInterval(function () {
        var now = new Date();
        var clock = $('#time');
        if (doblepix == ':') {
            doblepix = '&nbsp;';
        } else {
            doblepix = ':';
        }
        if (now.getMinutes() >= 10) {
            clock.html(now.getHours() + doblepix + now.getMinutes());
        } else {
            clock.html(now.getHours() + doblepix + '0' + now.getMinutes());
        }
    }, 1000);
};
/*
function delrow(idr) {
    let row = idr;

}
*/

$(".removebutton").on('click', function (event) {
    let idr=$(this).data('id');
    $.ajax({
        type:'DELETE',
        url:'delete_doc_row',
        data:{id:idr},
        success:function (response) {
            console.log(response)
            $('#doctab').html(response)
        }
    });
});

var file;
$('#uplfname').on('change', function (){
    const files = event.target.files;
    file = files[0];
});
$("#add_data_button").on('click', function (event) {
    let form = new FormData();
    form.append('vol', $('#sel_vol').val());
    form.append('rowtitle', $('#tdname').val());
    form.append('uplfile', file);
    $.ajax({
        type:'post',
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        url:'append',
        data:form,
        success:function (response) {
            console.log(response)
            alert('Данные успешно добавлены');
        }
    });

});
/*
    $.ajax({
        type:'DELETE',
        url:'delete_doc_row',
        data:{id:idr},
        success:function (response) {
            console.log(response)
            $('#doctab').html(response)
        }
    });
 */
