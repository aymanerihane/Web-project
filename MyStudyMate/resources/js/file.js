document.ready(function(){
    document.querySelector('input[type=file]').drop_uploader({
        uploader_text: 'Drop files to upload, or',
        browse_text: 'Browse',
        browse_css_class: 'button button-primary',
        browse_css_selector: 'file_browse',
        uploader_icon: '<i class="pe-7s-cloud-upload"></i>',
        file_icon: '<i class="pe-7s-file"></i>',
        time_show_errors: 5,
        layout: 'thumbnails'
    });
});
