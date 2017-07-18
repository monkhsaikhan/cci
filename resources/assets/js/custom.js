$(document).on('click', '.btn-destroyer', function(){

    var form = $($(this).attr('data-target'));

    swal({
        title: "Та итгэлтэй байна уу?",
        text: "Устгах гэж байна!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Тийм",
        cancelButtonText: "Үгүй",
        closeOnConfirm: false,
        closeOnCancel: true
    },
    function(isConfirm){
        if (isConfirm) {
            form.submit();
        }
    });

    return false;
});