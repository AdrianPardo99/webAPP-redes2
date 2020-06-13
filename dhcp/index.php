<?php
    include '../phpGral/init.php';
    $var="dhcp";
    echo "<title>DHCP Config</title>";
    include '../phpGral/titulo.php';
 ?>
<div class="row">
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center>
      <h4>DHCP Server</h4>
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
    <center><h5>DHCP Config Dynamic IPs</h5></center>
    <form id="dhcp-server">
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="id-ip" name="id-ip" data-length="15" maxlength="15" required>
        <label for="id-ip" class="active">IP-Id</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="netmask-ip" name="netmask-ip" data-length="15" maxlength="15" required>
        <label for="netmask-ip" class="active">Netmask</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="router-ip" name="router-ip" data-length="15" maxlength="15" required>
        <label for="router-ip" class="active">IP-Router</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="dns-ip" name="dns-ip" data-length="15" maxlength="15" required>
        <label for="dns-ip" class="active">IP-DNS-Server or IP-Router</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="min-ip" name="min-ip" data-length="15" maxlength="15" required>
        <label for="min-ip" class="active">IP-Range-Init</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="last-ip" name="last-ip" data-length="15" maxlength="15" required>
        <label for="last-ip" class="active">IP-Range-Last</label>
      </div>
      <div class="col s12 m6 l6">
        <span onclick="firstDHCP();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span>
      </div>
    </form>
  </div>
  <div class="col l2"></div>
</div>
<div class="row">
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center><h5>DHCP Config Static IP</h5></center>
    <form id="dhcp-server-static">
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="mac-ip-static" name="mac-ip-static" data-length="17" maxlength="17" minlength="17" required>
        <label for="mac-ip-static" class="active">MAC</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="ip-ip-static" name="ip-ip-static" data-length="15" maxlength="15" required>
        <label for="ip-ip-static" class="active">IP-Static</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="netmask-ip-static" name="netmask-ip-static" data-length="15" maxlength="15" required>
        <label for="netmask-ip-static" class="active">Netmask</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="router-ip-static" name="router-ip-static" data-length="15" maxlength="15" required>
        <label for="router-ip-static" class="active">IP-Router</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="dns-ip-static" name="dns-ip-static" data-length="15" maxlength="15" required>
        <label for="dns-ip-static" class="active">IP-DNS-Server or IP-Router</label>
      </div>
      <div class="input-field col s12 m6 l6">
        <input type="text" class="validate" id="name-ip-static" name="name-ip-static" data-length="20" maxlength="20" required>
        <label for="name-ip-static" class="active">Hostname for the static IP </label>
      </div>
      <div class="col s12 m6 l6">
        <span onclick="serverDHCP();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span>
      </div>
    </form>
  </div>
</div>
<div class="row">
  <div class="col l2"></div>
  <div class="col l8 m12 s12">
    <center><h5>Preview file config</h5></center>
    <form id="fileConf">
      <div class="input-field col s12 l12 m12">
        <textarea id="conf-file" name="conf-file" class="materialize-textarea" readonly></textarea>
        <label for="conf-file">Config file not editable</label>
      </div>
      <div class="col s12 m6 l6">
        <span onclick="saveDHCP();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse" ><i class="material-icons">cloud_download</i></a></span>
      </div>
      <div class="col s12 m6 l6">
        <span onclick="loadDHCP();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse" ><i class="material-icons">cloud_upload</i></a></span>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="js/dhcpJS.js"></script>
 <?php include '../phpGral/foot.php';?>
