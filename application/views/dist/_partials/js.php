<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- General JS Scripts -->
  
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_card") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/prism/prism.js"></script>
<?php
}elseif ($this->uri->segment(2) == "layout_transparent") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/sticky-kit.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_gallery") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/dropzonejs/min/dropzone.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_user") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/cleave.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/cleave-js/dist/addons/cleave-phone.us.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/select2/dist/js/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_editor") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route" || $this->uri->segment(2) == "gmaps_draggable_marker" || $this->uri->segment(2) == "gmaps_geocoding" || $this->uri->segment(2) == "gmaps_geolocation" || $this->uri->segment(2) == "gmaps_marker" || $this->uri->segment(2) == "gmaps_multiple_marker" || $this->uri->segment(2) == "gmaps_route" || $this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/modules/gmaps.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/fullcalendar/fullcalendar.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/chart.min.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <!-- <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>  -->
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/sweetalert/sweetalert.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/izitoast/js/iziToast.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
<?php
}elseif ($this->uri->segment(2) == "auth_register") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_profile") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/codemirror/mode/javascript/javascript.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_tickets") { ?>
  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyB55Np3_WsZwUQ9NS7DP-HnneleZLYZDNw&amp;sensor=true"></script>
  <script src="<?php echo base_url(); ?>assets/modules/gmaps.js"></script>
<?php
} ?>

  <!-- Page Specific JS File -->
<?php
if ($this->uri->segment(2) == "" || $this->uri->segment(2) == "index") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/index.js"></script>
<?php
}elseif ($this->uri->segment(2) == "index_0") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/index-0.js"></script>
<?php
}elseif ($this->uri->segment(2) == "bootstrap_modal") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/bootstrap-modal.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_chat_box") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-chat-box.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_multiple_upload") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-multiple-upload.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_statistic") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-statistic.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_table") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-table.js"></script>
<?php
}elseif ($this->uri->segment(2) == "components_user") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/components-user.js"></script>
<?php
}elseif ($this->uri->segment(2) == "forms_advanced_form") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/forms-advanced-forms.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_advanced_route") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-advanced-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_draggable_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-draggable-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geocoding") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-geocoding.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_geolocation") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-geolocation.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_multiple_marker") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-multiple-marker.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_route") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-route.js"></script>
<?php
}elseif ($this->uri->segment(2) == "gmaps_simple") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/gmaps-simple.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_calendar") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-calendar.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_chartjs") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-chartjs.js"></script>
<?php
}elseif ($this->uri->segment(2) != "") { ?>
  <!-- <script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script> -->
<?php
}elseif ($this->uri->segment(2) == "modules_ion_icons") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-ion-icons.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_owl_carousel") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-slider.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sparkline") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-sparkline.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_sweet_alert") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-sweetalert.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_toastr") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-toastr.js"></script>
<?php
}elseif ($this->uri->segment(2) == "modules_vector_map") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/modules-vector-map.js"></script>
<?php
}elseif ($this->uri->segment(2) == "auth_register") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/auth-register.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_post_create") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-post-create.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_posts") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-posts.js"></script>
<?php
}elseif ($this->uri->segment(2) == "features_setting_detail") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/features-setting-detail.js"></script>
<?php
}elseif ($this->uri->segment(2) == "utilities_contact") { ?>
  <script src="<?php echo base_url(); ?>assets/js/page/utilities-contact.js"></script>
<?php
} ?>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

  <script>
    var blimbing = ["Arjosari", "Balearjosari", "Blimbing", "Bunulrejo", "Jodipan", "Kesatrian", "Pandanwangi", "Polehan", "Polowijen", "Purwantoro", "Purwodadi"];
    var kedungkandang = ["Arjowinangun", "Bumiayu", "Buring", "Cemorokandang", "Kedungkandang", "Kotalama", "Lesanpuro", "Madyopuro", "Mergosono", "Sawojajar", "Tlogowaru", "Wonokoyo"];
    var klojen = ["Bareng", "Gadingasri", "Kasin", "Kauman", "Kiduldalem", "Klojen", "Oro-Oro Dowo", "Penanggungan", "Rampal Celaket", "Samaan", "Sukoharjo"];
    var lowokwaru = ["Dinoyo", "Jatimulyo", "Ketawanggede", "Lowokwaru", "Merjosari", "Mojolangu", "Sumbersari", "Tasikmadu", "Tlogomas", "Tulusrejo", "Tunggulwulung", "Tunjungsekar"];
    var sukun = ["Bakalankrajan", "Bandulan", "Bandungrejosari", "Ciptomulyo", "Gadang", "Karangbesuki", "Kebonsari", "Mulyorejo", "Pisangcandi", "Sukun", "Tanjungrejo"];

    var rtblimbing = [34, 45, 55, 147, 85, 70, 137, 74, 38, 157, 95];
    var rwblimbing = [5, 7, 10, 21, 8, 12, 14, 7, 6, 24, 13];

    var rtkedungkandang = [64, 57, 47, 63, 48, 141, 94, 133, 77, 120, 37, 27];
    var rwkedungkandang = [10, 6, 9, 11, 7, 11, 11, 17, 6, 16, 8, 5];

    var rtklojen = [78, 50, 96, 67, 49, 47, 97, 45, 35, 58, 57];
    var rwklojen = [9, 6, 11, 10, 8, 7, 10, 8, 6, 8, 7];

    var rtlowokwaru = [51, 80, 32, 104, 86, 117, 40, 33, 49, 75, 59, 73];
    var rwlowokwaru = [7, 11, 5, 15, 12, 19, 7, 6, 9, 16, 6, 8];

    var rtsukun = [49, 67, 129, 62, 72, 83, 46, 60, 87, 113, 138];
    var rwsukun = [7, 8, 13, 5, 9, 9, 5, 7, 11, 9, 13];
    var d = "";
    var id = 0;
    function updateChar() {
    d = document.getElementById("zoneSelect").value;
    // alert(d);
    $("#kelurahanya").empty();
    $("#rwnya").empty();
    $("#rtnya").empty();
    if(d=="1"){
      $.each(blimbing, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(value)); 
    });
    updateChar2();
    }else if(d=="4"){
      $.each(kedungkandang, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(value)); 
    });
    updateChar2();
    }else if(d=="2"){
      $.each(klojen, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(value)); 
    });
    updateChar2();
    }else if(d=="3"){
      $.each(lowokwaru, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(value)); 
    });
    updateChar2();
    }else if(d=="5"){
      $.each(sukun, function(key, value) {   
     $('#kelurahanya')
         .append($("<option></option>")
                    .attr("value", key)
                    .text(value)); 
    });
    updateChar2();
    }
    
    }
    function updateChar2() {
      id = document.getElementById("kelurahanya").value;
      $("#rwnya").empty();
        $("#rtnya").empty();
      if(d=="1"){
          for(var i = 1; i<=rwblimbing[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtblimbing[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="4"){
          for(var i = 1; i<=rwkedungkandang[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtkedungkandang[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="2"){
          for(var i = 1; i<=rwklojen[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtklojen[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }else if(d=="3"){
          for(var i = 1; i<=rwlowokwaru[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtlowokwaru[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        
        }else if(d=="5"){
          for(var i = 1; i<=rwsukun[id];i++){
            $('#rwnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
          for(var i = 1; i<=rtsukun[id];i++){
            $('#rtnya')
            .append($("<option></option>")
                        .attr("value", i)
                        .text(i)); 
          }
        }
    }

    $(document).ready( function () {
                $('#table_id').DataTable({
                processing: true,
                serverSide: true,
                      ajax: {"url": "<?php echo base_url().'dashboard/data_json_perpindahan'?>", "type": "POST"},
                      columns: [
                            {"data": "id_perpindahan"},
                            {"data": "nama"},
                            {"data": "kecamatan",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Blimbing';
                                }else if(data==2){
                                  return 'Klojen';
                                }else if(data==3){
                                  return 'Lowokwaru';
                                }else if(data==4){
                                  return 'Kedungkandang';
                                }else if(data==5){
                                  return 'Sukun';
                                }
                            }},
                            {"data": "kelurahan",
                            render: function (data, type, row, meta) {
                              if(row['kecamatan']==1){
                                return blimbing[data];
                            
                              }else if(row['kecamatan']==2){
                                return klojen[data];
                             
                              }else if(row['kecamatan']==3){
                                return lowokwaru[data];
                             
                              }else if(row['kecamatan']==4){
                                return kedungkandang[data];
                             
                              }else if(row['kecamatan']==5){
                                return sukun[data];
                              }
                            }},
                            {"data": "rw"},
                            {"data": "rt"},
                            {"data": "alamat_rt"},
                            {"data": "tgl_pindah"},
                            {"data": "jenis_pindah",
                            render: function (data, type, row, meta) {
                                if(data==1){
                                  return 'Pindah Masuk';
                                }else{
                                  return 'Pindah Keluar';
                                }
                            }},
                            {
                    "data": "alamat_rt",
                    render: function (data, type, row, meta) {
                        return '<td><a href="javascript:void(0);" onclick="updateChar()" data-kecamatan="'+row['kecamatan']+'" data-kelurahan="'+row['kelurahan']+'" data-rw="'+row['rw']+'" data-rt="'+row['rt']+'" data-nik="'+row['nik']+'" data-nama="'+row['nama']+'" data-jenis_pindah="'+row['jenis_pindah']+'" data-skpwni="'+row['skpwni']+'" data-tgl_pindah="'+row['tgl_pindah']+'" data-alamat_rt="'+row['alamat_rt']+'" data-kode="'+row['id_perpindahan']+'" class="btn btn-primary edit_record">Ubah</a></td><td ><a style="margin-left:10px" href="javascript:void(0);"  data-kode="'+row['id_perpindahan']+'" class="btn btn-danger hapus_record">Hapus</a></td>';
                    }
                },
                      ]
                });
            } );

            $('#table_id').on('click','.hapus_record',function(){
                    var id_perpindahan=$(this).data('kode');
                    $('#ModalHapus').modal('show');
                    $('[name="id_perpindahan"]').val(id_perpindahan);
              });

            $('#table_id').on('click','.edit_record',function(){
              console.log("Jalan");
              // updateChar();
              updateChar();
                var id_perpindahan=$(this).data('kode');
                var kecamatan=$(this).data('kecamatan');                               
                var kelurahan=$(this).data('kelurahan');
                var rw=$(this).data('rw');
                var rt=$(this).data('rt');
                var nik=$(this).data('nik');               
                var nama=$(this).data('nama');
                var jenis_pindah=$(this).data('jenis_pindah');
                var skpwni=$(this).data('skpwni');               
                var tgl_pindah=$(this).data('tgl_pindah');
                var alamat_rt=$(this).data('alamat_rt');
                $('#ModalUpdate').modal('show');
                $('[name="kecamatan"]').val(kecamatan);
                $('[name="kelurahan"]').val(kelurahan);
                $('[name="rw"]').val(rw);
                $('[name="rt"]').val(rt);
                $('[name="nik"]').val(nik);
                $('[name="nama"]').val(nama);
                $('[name="jenis_pindah"]').val(jenis_pindah);
                $('[name="skpwni"]').val(skpwni);
                $('[name="tgl_pindah"]').val(tgl_pindah);
                $('[name="alamat_rt"]').val(alamat_rt);
          });
  </script>
</body>
</html>