
function playvideo(rolik) {
    $('.modal-body').find('iframe').attr('src', rolik)
    var videoModal = new bootstrap.Modal(document.getElementById('exampleModal'));
    videoModal.show();
    console.log(rolik);
}

function stopvideo() {
    $('.modal-body').find('iframe').attr('src', "")
}


// watch
/*
window.onload = function () {
//    const myModal = new bootstrap.Modal(document.getElementById('add_phone_modal'));

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
*/
/*
function delrow(idr) {
    let row = idr;

}
*/

$(".removebutton").on('click', function (event) {
    let idr = $(this).data('id');
    let remove = confirm('Удаляем? Отменить не выйдет!');
    if (remove) {
        $.ajax({
            type: 'DELETE',
            url: '/delete_doc_row',
            data: {id: idr},
            success: function (response) {
                console.log(response)
                document.location.reload();
                alert('Данные удалены');
            }
        });
    }
});

var file;
$('#uplfname').on('change', function () {
    const files = event.target.files;
    file = files[0];
});
$("#add_data_button").on('click', function (event) {

    if ($('#sel_vol').val() == '0' || $('#tdname').val() == '' || file == null) {
/*	$(this).setAttribute('data-null', true) */
        alert('Вы ввели не все данные!');
        return;
    }
    let form = new FormData();
    form.append('vol', $('#sel_vol').val());
    form.append('rowtitle', $('#tdname').val());
    form.append('uplfile', file);
    $.ajax({
        type: 'post',
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        url: 'append',
        data: form,
        success: function (response) {
            console.log(response)
            alert('Данные успешно добавлены');
        }
    });

});


$(document).on('click','.fio',function(){
    let idpc = $(this).data('id');
    let addfio = prompt('ФИО врача');
    $.ajax({
        type: 'post',
        url: 'add_fio',
        data: {id:idpc,fio:addfio},
        success: function (response) {
            console.log(response)
            document.location.reload(); 
	      
        }
    });
});

$("#otd_butt").on('click',function(){
    let otd_name = prompt('Новое отделение:');
    $.ajax({
        type: 'post',
        url: 'add_otd',
        data: {otd_name:otd_name},
        success: function (response) {
            console.log(response)
            document.location.reload(); 
	    alert('Новое отделение добавлено!');      
        }
    });
});


$(".col-auto select").on('change', function (event) {
    let idotd=$('.col-auto select').val();
    $.ajax({
        type:'POST',
        url: '/listph',
        data:{id:idotd},
        success:function (response) {
            console.log(response)
            $('#maindiv').html(response)
        }
    })
//        alert('here')
});

$(document).on('click',".remph",function (event) {
    let idr = $(this).data('id');
    let remove = confirm('Удаляем? Отменить не выйдет!');
    if (remove) {
        $.ajax({
            type: 'DELETE',
            url: '/delete_phone',
            data: {id: idr},
            success: function (response) {
                console.log(response)
                document.location.reload();
                alert('Данные удалены');
            }
        });
    }
});

$("#savedata").on('click',function() {
    let idr = $("#hideid").data('id');
    let otd_id=$(".modal .modal-body select").val();
	if(otd_id=="0"){
	    alert('Отдел не забываем!!');
	    return;
	}
    let new_sitynum = $("#newcitynum").val();
    let new_locnum = $("#newlocnum").val();
    let new_location = $("#location").val();
//    const myModal = new bootstrap.Modal(document.getElementById('add_phone_modal'));
    $("#add_phone_modal").modal('show');
    console.log({id:idr,idotd:otd_id,sitynum:new_sitynum,locnum:new_locnum,location:new_location});
        $.ajax({
            type: 'post',
            url: '/add_phone',
            data: {id:idr,idotd:otd_id,sitynum:new_sitynum,locnum:new_locnum,location:new_location},
            success: function (response) {
                console.log(response)
    //            $('#maindiv').html(response)
		alert('Все успешно сделано!');
        	$("#add_phone_modal").modal('hide');
		$(".modal .modal-body select").val("0");
            }
        });

    });

$(document).on('click',".updph",function (event) {
    let idr = $(this).data('id');
//    const myModal = new bootstrap.Modal(document.getElementById('add_phone_modal'));
        $.ajax({
            type: 'post',
            url: '/modal_phone',
            data: {id: idr},
            success: function (response) {
                console.log(response)
                $('.numdata').html(response);
                $("#add_phone_modal").modal('show');
            
            }
        });
    
});

var now, dd, td;
var months = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
var days = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];

document.addEventListener("DOMContentLoaded", init, false);
function init(){
 dd = document.getElementById("date");
 td = document.getElementById("time");
 updateTime();
 setInterval(updateTime,1000);
}
function updateTime(){
 var clockdata = getClockStrings();
 dd.innerHTML = clockdata.datehtml;
 td.innerHTML = clockdata.timehtml;
 dd.dateTime = now.toISOString();
 td.dateTime = now.toISOString();
}
function getClockStrings(){
 now = new Date();
 var year = now.getFullYear();
 var month = months[now.getMonth()];
 var date = now.getDate();
 var day = days[now.getDay()];
 var hour = now.getHours();
 var minutes = now.getMinutes();
 var seconds = now.getSeconds();
 var meridian = hour < 24 ? "AM" : "PM"; //
 var clockhour = hour > 24 ? hour - 24 : hour;
 if (hour === 0) {clockhour = 24;}
 var clockminutes = minutes < 10 ? "0" + minutes : minutes;
 var clockseconds = seconds < 10 ? "0" + seconds : seconds;
 var datehtml = day + ", " + date;
 var timehtml = clockhour + ":" + clockminutes;
 return {"datehtml":datehtml,"timehtml":timehtml};
}

$(window).on('load',function(){
$(document).on('click',"#add_cartrige_button",function (event) {
	$("#saveOrg").hide();
	$("#save_data_button").show();
	let addtype = $("#type_add").val();
        $.ajax({
	    type: 'get',
            url: '/cart_list',
	    data: {addtype: addtype},
            success: function (response) {
                console.log(response)
                $('#org_mod_context').html(response);
                $("#orgmodal").modal('show');
            
            }
        });
    
});
});

$(window).on('load',function(){
$(document).on('click',"#add_model_button",function (event) {
	$("#saveOrg").hide();
	$("#save_data_button").show();
	let addtype = $("#type_add").val();
        $.ajax({
	    type: 'get',
            url: '/model_list',
	    data: {addtype: addtype},
            success: function (response) {
                console.log(response)
                $('#org_mod_context').html(response);
                $("#orgmodal").modal('show');
            
            }
        });
    
});
});


$("#save_data_button").on('click',function() {
    let new_name = $("#newvalue").val();
    let addtype = $("#type_add").val();
        $.ajax({
            type: 'post',
            url: '/add_cart',
            data: {name:new_name,addtype: addtype},
            success: function (response) {
                console.log(response)
		alert('Добавили!');
            }
        });

    });

$(window).on('load',function(){
$(document).on('click',"#add_print_button",function (event) {
	$("#saveOrg").show();
	$("#save_data_button").hide();
	let id = $("#id").val();
        $.ajax({
	    type: 'post',
            url: '/orgmodal',
	    data: {id: id},
            success: function (response) {
                console.log(response)
                $('#org_mod_context').html(response);
                $("#orgmodal").modal('show');
            
            }
        });
    
});
});

$(window).on('load',function(){
$(document).on('click',"#saveOrg",function (event) {
	if ($("#repairbox").is(':checked')){
	    var in_repair = 1;
	} else {
	    var in_repair = 0;
	}
	let id = $("#id").val();
        let otd = $("#selectotdel").val();
	let model = $("#selectmodel").val();
	let inv = $("#invnum").val();
	let drum = $("#drum").val();
	let cart = $("#selectcart").val();
	let ip = $("#ip").val();
	let target = $("#target").val();
	
	if (target == '0' || otd == '0'){
	    alert("куда ставить эту радость?");
	    return;
	}
	if(inv == ''){
	    alert("Инвентарничек пожалуйста!");
	    return;
	}
	
	$.ajax({
	    type: 'post',
            url: '/edit_tech',
	    data: {id: id, otd: otd, model: model, inv: inv, drum: drum, cart: cart, ip: ip, target: target, in_repair: in_repair},
            success: function (response) {
                console.log(response)
                alert("Все зроблено!");
            
            }
        });
    
});
});

$("#globalOtdel").on('change', function (event) {
    let idotd=$('#globalOtdel').val();
    
    $.ajax({
        type:'POST',
        url: '/list_tech',
        data:{id:idotd},
        success:function (response) {
            console.log(response)
            $('#maindiv').html(response)
        }
    })
});

$(document).on('click',".orgtechdelete",function (event) {
    let idr = $(this).data('id');
    let remove = confirm('Удаляем? Отменить не выйдет!');
    if (remove) {
        $.ajax({
            type: 'DELETE',
            url: '/delete_org',
            data: {id: idr},
            success: function (response) {
                console.log(response)
                document.location.reload();
                alert('Данные удалены');
            }
        });
    }
});

$(document).on('click',".detailtech",function (event) {
    let idr = $(this).data('id');
        $.ajax({
            type: 'post',
            url: '/show_detail_tech',
            data: {id: idr},
            success: function (response) {
                console.log(response)
		$('#org_mod_context').html(response);
		$("#saveOrg").hide();
		$("#save_data_button").hide();
                $("#orgmodal").modal('show');
		
            }
        });
    
});

$(document).on('click',".orgtechedit",function (event) {
    let idr = $(this).data('id');
        $.ajax({
            type: 'post',
            url: '/disloc_tech',
            data: {id: idr},
            success: function (response) {
                console.log(response)
		$('#org_mod_context').html(response);
		$("#saveOrg").show();
		$("#save_data_button").hide();
                $("#orgmodal").modal('show');
		
            }
        });
    
});

$(document).on('click',"#search_org",function (event) {
    let inv = $("#inv").val();
    let ip = $("#ip").val();
    if(inv && ip ){
	alert("Ну или инвентарник или IP");
	return;
    }		
        $.ajax({
            type: 'post',
            url: '/find_tech',
            data: {inv: inv, ip: ip},
            success: function (response) {
                console.log(response)
		$('#maindiv').html(response);
            }
        });
    
});

$("#show_repair_button").on('click', function (event) {
    $.ajax({
        type:'POST',
        url: '/show_repair',
        success:function (response) {
            console.log(response)
	    if (response == 0) {
	    const greeting = new Notification('В ремонте ничего. Все работает, ура!');
	    setTimeout(() => greenting.close(), 10*1000);
	    }
            $('#maindiv').html(response)
        }
    })
});

$(window).keyup(function(e){
    var target = $('.checkbox-ios input:focus');
    if (e.keyCode == 9 && $(target).length){
	$(target).parent().addClass('focused');
    }
});
 
$('.checkbox-ios input').focusout(function(){
    $(this).parent().removeClass('focused');
});