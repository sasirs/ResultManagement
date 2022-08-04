<script src="./bootstrap/js/jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
$('#table').DataTable({
    responsive: true
});
</script>
<script>
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

<script type="text/javascript">
// add row
$("#addRow").click(function() {
    var html = '';
    html += '<div id="inputsub">';
    html += '<div class="form-group m-3">';
    html += ' <label for="sub1" class="fw-bolder fs-6">subject :<span class="text-danger">*</span></label>';
    html += '<div class="row ms-1">';
    html +=
        '<input type="text" class="form-control col" placeholder="Enter subject code " name="sub[]" required> ';
    html += '<div class="input-group-append col">';
    html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
    html += '</div>';
    html += '</div>';
    html += '</div>';

    $('#newRow').append(html);
});

// remove row
$(document).on('click', '#removeRow', function() {
    $(this).closest('#inputsub').remove();
});
</script>
