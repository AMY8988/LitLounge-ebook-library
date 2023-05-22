window.$ = window.jQuery = require('jquery');
import 'bootstrap';

$(document).ready(function() {
    $('#summernote').summernote({
        height: 400,
        placeholder: "Description"
    });
});
