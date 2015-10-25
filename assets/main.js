$(document).ready(function() {

    $('.selectpicker-maps').selectpicker({
        style: 'btn btn-default btn-xl no-radius with-images btn-maps',
        size: 4
    });

    $("[rel='tooltip']").tooltip();    
 
    $("#avatar").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i> Unggah',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="assets/images/dummy-agent.png" alt="Your Avatar" style="width:160px">',
        layoutTemplates: {main2: '{preview} {browse} {remove}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

    $("#avatar2").fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseLabel: '',
        removeLabel: '',
        browseIcon: '<i class="glyphicon glyphicon-folder-open"></i> Unggah',
        removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
        removeTitle: 'Cancel or reset changes',
        elErrorContainer: '#kv-avatar-errors',
        msgErrorClass: 'alert alert-block alert-danger',
        defaultPreviewContent: '<img src="assets/images/dummy-agent.png" alt="Your Avatar" style="width:160px">',
        layoutTemplates: {main2: '{preview} {browse} {remove}'},
        allowedFileExtensions: ["jpg", "png", "gif"]
    });

    $('#modalLogin').on('shown.bs.modal', function () {
      $('#modalLogin').focus();
    });

    $('#ticker-items').vTicker('init', {speed: 400, 
        pause: 2000,
        showItems: 5,
        padding:0});
});
