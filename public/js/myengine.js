
    function playvideo(rolik)
{
    /*
        let video = document.createElement('iframe');

        let source=document.createElement('source');

        source.setAttribute('src',rolik);

        video.append(source);

        $('.modal-body').html(video);

        var picHolder = document.getElementById("mbody");
        var img = document.createElement("img");
        img.src = "laptop.png";
        picHolder.appendChild(img);
        console.log();

     */
    $('.modal-body').find('iframe').attr('src',rolik)
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    myModal.show();
}

function stopvideo(){
    $('.modal-body').find('iframe').attr('src',"")
}


