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
  $('input#name-dns , input#nameserver-dns , input#namehost-dns , input#ip-host-dns').characterCounter();
});

function fillDNS() {
  varName=$("#name-dns").val();
  varServer=$("#nameserver-dns").val();
  if(varName==""||varServer==""){
    M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
    return false;
  }
  document.getElementById("name-dns").value="";
  document.getElementById("nameserver-dns").value="";
  document.getElementById("conf-file").value=varName+";"+varServer+";";
  M.toast({html: "Se a&ntildeadio el nombre del servidor y nombre de dominio correctamente abajo", classes: 'rounded'});
};

function addToDNS(){
  varHost=$("#namehost-dns").val();
  varIP=$("#ip-host-dns").val();
  if(varHost==""||varIP==""){
    M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
    return false;
  }
  document.getElementById("namehost-dns").value="";
  document.getElementById("ip-host-dns").value="";
  document.getElementById("direct-conf-file").value=$("#direct-conf-file").val()+varHost+"_IN_A_"+varIP+";\n";
  document.getElementById("inverse-conf-file").value=$("#inverse-conf-file").val()+varIP+"_IN_PTR_"+varHost+";\n";
  M.toast({html: "Se a&ntildeadio host e ip a zona directa e inversa del dns", classes: 'rounded'});
};

function saveDNS(){
  varConfG=$("#conf-file").val();
  varDir=$("#direct-conf-file").val();
  varInv=$("#inverse-conf-file").val();
  if(varConfG==""||varDir==""||varInv==""){
    M.toast({html: 'Todos los campos deben estar llenos para descargar la configuraci&oacuten', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/dnsSave.php",
    data:$("#confIn").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
        setTimeout(() => {M.toast({html: respAX.directa, classes: 'rounded'});}, 2000);
        setTimeout(() => {M.toast({html: respAX.inversa, classes: 'rounded'});}, 4000);

      }
    }
  });
};

function loadDNS(){
  varConfG=$("#conf-file").val();
  varDir=$("#direct-conf-file").val();
  varInv=$("#inverse-conf-file").val();
  if(varConfG==""||varDir==""||varInv==""){
    M.toast({html: 'Todos los campos deben estar llenos para cargar la configuraci&oacuten al servidor', classes: 'rounded'});
    return false;
  }

  $.ajax({
    method:"post",
    url:"phpFiles/dnsLoad.php",
    data:$("#confIn").serialize(),
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
