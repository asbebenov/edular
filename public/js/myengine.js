
    function playvideo(rolik)
{
    $('.modal-body').find('iframe').attr('src',rolik)
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
    console.log(rolik);
}

function stopvideo(){
    $('.modal-body').find('iframe').attr('src',"")
}


// watch

window.onload = function(){
    var doblepix = ":";
    window.setInterval(function(){
        var now = new Date();
        var clock = $('#time');
        if (doblepix==':'){
            doblepix='&nbsp;';
        }else {
            doblepix =':';
        }
        if (now.getMinutes()>=10) {
            clock.html(now.getHours() + doblepix + now.getMinutes());
        }else {
            clock.html(now.getHours() + doblepix +'0'+now.getMinutes());
        }
    }, 1000);
};

function submitForm() {
  alert('before submit');
  document.getElementById('formpc').submit();
}

document.getElementById('ip').onkeypress = function(event) {
  if (event.keyCode == 13) {
    submitForm();
  }
}

    $(".btn-warning").on('click', function (event) {
        let idr=$(this).data('id');
        console.log(idr);
    });
