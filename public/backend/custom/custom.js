function readURL(input) {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function (e) {
            $('#target_image').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$("#profile").change(function () {
    readURL(this);
});


$(document).ready(function () {

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    }

    $('#title').keyup(function () {
        let value = $(this).val();

        $('#slug').val(slugify(value));

    });


    CKEDITOR.replace('description_id')
});
