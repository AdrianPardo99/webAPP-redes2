<?php
    include '../phpGral/init.php';
    $var="dns";
    echo "<title>DNS Config</title>";
    include '../phpGral/titulo.php';
 ?>
 <div class="row">
   <div class="col l2"></div>
   <div class="col l8 s12 m12">
     <center>
       <h4>DNS Server</h4>
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
     <center><h5>Domain nameserver</h5></center>
     <form id="nameserver">
       <div class="input-field col s12 l6 m6">
         <input type="text" name="name-dns" class="validate" data-length="30" maxlength="30" id="name-dns" required>
         <label for="name-dns" class="active">Name for the domain service</label>
       </div>
       <div class="input-field col s12 l6 m6">
         <input type="text" name="nameserver-dns" class="validate" data-length="30" maxlength="30" id="nameserver-dns" required>
         <label for="nameserver-dns" class="active">Name for the domain service</label>
       </div>
       <div class="col s12 l6 m6">
         <span onclick="fillDNS();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span>
       </div>
     </form>
   </div>
   <div class="col l2"></div>
 </div>

 <div class="row">
   <div class="col l2"></div>
   <div class="col l8 m12 s12">
     <center><h5>Add host to DNS</h5></center>
     <form id="zoneDNS">
       <div class="input-field col s12 l6 m6">
         <input type="text" name="zone-host-dns" class="validate" data-length="30" maxlength="30" id="zone-host-dns" required>
         <label for="zone-host-dns" class="active">Name Host</label>
       </div>
       <div class="input-field col s12 l6 m6">
         <input type="text" name="ip-host-dns" class="validate" data-length="15" maxlength="15" id="ip-host-dns" required>
         <label for="ip-host-dns" class="active">IP Host</label>
       </div>
       <div class="col s12 l6 m6">
         <span onclick="addToDNS();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse"><i class="material-icons">keyboard_arrow_right</i></a></span>
       </div>
     </form>
   </div>
   <div class="col l2"></div>
 </div>

 <div class="row">
   <div class="col l2"></div>
   <div class="col l8 m12 s12">
     <center><h5>Nameserver Initial File Config</h5></center>
     <form id="confIn">
       <div class="input-field col l12 s12 m12">
         <textarea id="conf-file" name="conf-file" class="materialize-textarea" readonly></textarea>
         <label for="conf-file">Config file nameserver not editable</label>
       </div>
       <div class="input-field col s12 l6 m6">
         <textarea id="direct-conf-file" name="direct-conf-file" class="materialize-textarea" readonly></textarea>
         <label for="direct-conf-file">Config file direct zone not editable</label>
       </div>
       <div class="input-field col s12 l6 m6">
         <textarea id="inverse-conf-file" name="inverse-conf-file" class="materialize-textarea" readonly></textarea>
         <label for="inverse-conf-file">Config file direct zone not editable</label>
       </div>
       <div class="col s12 m6 l6">
         <span onclick="saveDNS();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse" ><i class="material-icons">cloud_download</i></a></span>
       </div>
       <div class="col s12 m6 l6">
         <span onclick="loadDNS();"><a href="#" class="waves-effect waves-light btn deep-purple darken-4 pulse" ><i class="material-icons">cloud_upload</i></a></span>
       </div>
     </form>
   </div>
 </div>
 <script type="text/javascript" src="js/dnsJS.js"></script>
<?php include '../phpGral/foot.php';?>
