$("#sb").on('click', function (event) {
    let inpnum=$('#inpnum').val();
    let inpip=$('#inpip').val();
    if (inpnum && inpip){alert("Номера или IP хватит. Не надо и то и то"); return;}
    $.ajax({
        type:'GET',
        url:'pc',
        data:{inpnum:inpnum,inpip:inpip},
        success:function (response) {
            console.log(response)
            $('#maindiv').html(response)
        }
    })
});
