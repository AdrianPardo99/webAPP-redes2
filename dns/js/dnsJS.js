function clickStart() {
  varStatus="init_t";
  $.ajax({
    method:"post",
    url:"phpFiles/service.php",
    data:$("#init").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
      }
    }
  });
};

function clickStop(){
  $.ajax({
    method:"post",
    url:"phpFiles/service.php",
    data:$("#stop").serialize(),
    cache:false,
      success:function(resp){
        var respAX = JSON.parse(resp);
        if (respAX.resultado == 0){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }else if (respAX.resultado == 1){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }
      }
  });
};

function clickRestart() {
  $.ajax({
    method:"post",
    url:"phpFiles/service.php",
    data:$("#restart").serialize(),
    cache:false,
      success:function(resp){
        var respAX = JSON.parse(resp);
        if (respAX.resultado == 0){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }else if (respAX.resultado == 1){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }
      }
  });
};
function clickView(){
  $.ajax({
    method:"post",
    url:"phpFiles/service.php",
    data:$("#status").serialize(),
    cache:false,
      success:function(resp){
        var respAX = JSON.parse(resp);
        if (respAX.resultado == 0){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }else if (respAX.resultado == 1){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }
      }
  });
};

$(document).ready(function(){
  $('input#name-dns , input#nameserver-dns , input#zone-host-dns , input#ip-host-dns').characterCounter();
});

function fillDNS() {
  console.log("Boton de nombre de dominio");
};

function addToDNS(){
  console.log("Boton de add dominio");
};

function saveDNS(){
  console.log("Boton de save dns");
};

function loadDNS(){
  console.log("Boton de load dns");
};
