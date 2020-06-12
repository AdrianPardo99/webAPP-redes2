function clickStart(){
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
  $('input#ip-tftp , input#port-tftp , input#filename-tftp , input#filename-del-tftp , input#filename-see-tftp').characterCounter();
});

function runScript(){
  varIP=$("#ip-tftp").val();
  varPort=$("#port-tftp").val();
  varFile=$("#filename-tftp").val();
  if(varIP==""||varPort==""||varFile==""){
    M.toast({html: 'Todos los campos deben estar llenos', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/exec.php",
    data:$("#tftp-server").serialize(),
    cache:false,
      success:function(resp){
        var respAX = JSON.parse(resp);
        if (respAX.resultado == 0){
          M.toast({html: respAX.mensaje, classes: 'rounded',timeRemaining:10000});
        }else if (respAX.resultado == 1){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
          document.getElementById("ip-tftp").value="";
          document.getElementById("port-tftp").value="";
          document.getElementById("filename-tftp").value="";
        }
      }
  });
};

function deleteFile(){
  varFile=$("#filename-del-tftp").val();
  if(varFile==""){
    M.toast({html: 'El campo debe estar lleno', classes: 'rounded'});
    return false;
  }
  $.ajax({
    method:"post",
    url:"phpFiles/delConfFile.php",
    data:$("#tftp-del").serialize(),
    cache:false,
      success:function(resp){
        var respAX = JSON.parse(resp);
        if (respAX.resultado == 0){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
        }else if (respAX.resultado == 1){
          M.toast({html: respAX.mensaje, classes: 'rounded'});
          document.getElementById("filename-del-tftp").value="";
        }
      }
  });
};
function search() {
  varFile=$("#filename-see-tftp").val();
  if(varFile==""){
    M.toast({html: 'El campo debe estar lleno', classes: 'rounded'});
    return false;
  }
    $.ajax({
      method:"post",
      url:"phpFiles/seeFile.php",
      data:$("#see-config").serialize(),
      cache:false,
        success:function(resp){
          var respAX = JSON.parse(resp);
          if (respAX.resultado == 0){
            M.toast({html: respAX.mensaje, classes: 'rounded'});
          }else if (respAX.resultado == 1){
            M.toast({html: respAX.mensaje, classes: 'rounded'});
            document.getElementById("conf-file").value=respAX.contain;
            document.getElementById("filename-see-tftp").value="";
          }
        }
    });
};
