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
  $('input#id-ip , input#netmask-ip , input#router-ip , input#dns-ip , input#min-ip , input#last-ip , input#mac-ip-static , input#ip-ip-static , input#netmask-ip-static , input#router-ip-static , input#dns-ip-static , input#name-ip-static').characterCounter();
});

function firstDHCP(){
  varID=$("#id-ip").val();
  varNet=$("#netmask-ip").val();
  varRout=$("#router-ip").val();
  varDNS=$("#dns-ip").val();
  varMin=$("#min-ip").val();
  varMax=$("#last-ip").val();
  if(varID==""||varNet==""||varRout==""||varDNS==""||varMin==""||varMax==""){
    M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/createFileSub.php",
    data:$("#dhcp-server").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded',timeRemaining:10000});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
        document.getElementById("conf-file").value=$("#conf-file").val()+respAX.conf;
        document.getElementById("id-ip").value="";
        document.getElementById("netmask-ip").value="";
        document.getElementById("router-ip").value="";
        document.getElementById("dns-ip").value="";
        document.getElementById("min-ip").value="";
        document.getElementById("last-ip").value="";
      }
    }
  });
};

function serverDHCP(){
  varMAC=$("#mac-ip-static").val();
  varIP=$("#ip-ip-static").val();
  varNet=$("#netmask-ip-static").val();
  varRout=$("#router-ip-static").val();
  varDNS=$("#dns-ip-static").val();
  varHost=$("#name-ip-static").val();
  if(varMAC==""||varIP==""||varNet==""||varRout==""||varDNS==""||varHost==""){
    M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/createFileStatic.php",
    data:$("#dhcp-server-static").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded',timeRemaining:10000});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
        document.getElementById("conf-file").value=$("#conf-file").val()+respAX.conf;
        document.getElementById("mac-ip-static").value="";
        document.getElementById("ip-ip-static").value="";
        document.getElementById("netmask-ip-static").value="";
        document.getElementById("router-ip-static").value="";
        document.getElementById("dns-ip-static").value="";
        document.getElementById("name-ip-static").value="";
      }
    }
  });
};

function loadDHCP(){
  varText=$("#conf-file").val();
  if(varText==""){
    M.toast({html: 'El campo del archivo de configuraci&oacuten debe contener datos, para cargar los datos', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/sentConf.php",
    data:$("#fileConf").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded',timeRemaining:10000});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
      }
    }
  });
};

function saveDHCP(){
  varText=$("#conf-file").val();
  if(varText==""){
    M.toast({html: 'El campo del archivo de configuraci&oacuten debe contener datos, para guardar el archivo', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/saveConf.php",
    data:$("#fileConf").serialize(),
    cache:false,
    success:function(resp){
      var respAX = JSON.parse(resp);
      if (respAX.resultado == 0){
        M.toast({html: respAX.mensaje, classes: 'rounded',timeRemaining:10000});
      }else if (respAX.resultado == 1){
        M.toast({html: respAX.mensaje, classes: 'rounded'});
      }
    }
  });
};
