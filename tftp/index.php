<?php
    include '../phpGral/init.php';
    $var="tftp";
    echo "<title>TFTP Backup</title>";
    include '../phpGral/titulo.php';
 ?>
<div class="row">
  <div class="col l2">  </div>
  <div class="col l8 s12 m12">
    <center>
      <h4>Backup Routers via TFTP service</h4>
      <h5>Modify the status of the service</h5>
    </center>

    <table class="highlight centered responsive-table">
      <thead>
        <tr>
          <th>Start service</th>
          <th>Stop service</th>
          <th>Restart service</th>
          <th>Check Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span onclick="clickStart();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span></td>
          <td><span onclick="clickStop();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons"> not_interested </i></a></span></td>
          <td><span onclick="clickRestart();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">settings_backup_restore</i></a></span></td>
          <td><span onclick="clickView();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">visibility</i></a></span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col l2"></div>
  <div class="col l1 m1 s1">
    <form id="init" style="visibility: hidden;"><input type="text" id="service-init" name="service" value="init_t"></form>
    <form id="stop" style="visibility: hidden;"><input type="text" id="service-stop" name="service" value="stop_t"></form>
    <form id="restart" style="visibility: hidden;"><input type="text" id="service-rest" name="service" value="restart_t"></form>
    <form id="status" style="visibility: hidden;"><input type="text" id="service-status" name="service" value="status_t"></form>
  </div>
  <div class="col l11 m11 s11"></div>
  <br>
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center><h5>Backup router config file</h5></center>
    <form id="tftp-server">
      <div class="input-field col s12 l6 m6">
        <input type="text" name="ip-tftp" value="" class="validate" data-length="15"  maxlength="15" id="ip-tftp" required>
        <label for="ip-tftp" class="active">IP router or main server for backup the router</label>
      </div>
      <div class="input-field col s12 l6 m6">
        <input type="text" name="port-tftp" value="" class="validate" data-length="5" maxlength="5" id="port-tftp" required>
        <label for="port-tftp" class="active">Port of the router</label>
      </div>
      <div class="input-field col s12 l6 m6">
        <input type="text" name="filename-tftp" value="" class="validate" data-length="20" maxlength="20" id="filename-tftp" required>
        <label for="filename-tftp" class="active">Filename for the conf file</label>
      </div>
      <div class="col s12 l6 m6">
        <label for="btn1">Run Script</label><br>
        <span onclick="runScript();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span>
      </div>
    </form>
  </div>
  <div class="col l2"></div>
</div>
<div class="row">
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center><h5>Try to delete file in server</h5></center>
    <form id="tftp-del">
      <div class="input-field col s12 l6 m6">
        <input type="text" name="filename-del-tftp" value="" class="validate" data-length="20" maxlength="20" id="filename-del-tftp" required>
        <label for="filename-del-tftp" class="active">Filename for delete the conf file from the server storage</label>
      </div>
      <div class="col s12 l6 m6">
        <span onclick="deleteFile();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">delete_sweep</i></a></span>
      </div>
    </form>
  </div>
  <div class="col l2"></div>
</div>
<div class="row">
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center><h5>See a conf file</h5></center>
    <form id="see-config">
      <div class="input-field col s12 l6 m6">
        <input type="text" name="filename-see-tftp" value="" class="validate" data-length="20" maxlength="20" id="filename-see-tftp" required>
        <label for="filename-see-tftp" class="active">Filename for see the conf file from the server storage</label>
      </div>
      <div class="col s12 l6 m6">
        <span onclick="search();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">visibility</i></a></span>
      </div>
    </form>
    <div class="input-field col s12 l12 m12">
      <textarea id="conf-file" class="materialize-textarea" readonly>Empty</textarea>
      <label for="conf-file">Config file</label>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jsService.js"></script>
<?php include '../phpGral/foot.php';?>
