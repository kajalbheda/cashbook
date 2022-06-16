/* ------------------------------------------------------------------------------
 *
 *  # Datatables
 *
 * ---------------------------------------------------------------------------- */

var DatatableBasic = (function () {
    // Basic Datatable examples
    var _componentDatatableBasic = function () {
      //  Setting datatable defaults
        $.extend($.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fBl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: "<span>Filter:</span> _INPUT_",
                searchPlaceholder: "Type to filter...",
                lengthMenu: "<span>Show:</span> _MENU_",
                paginate: {
                    first: "First",
                    last: "Last",
                    next: $("html").attr("dir") == "rtl" ? "&larr;" : "&rarr;",
                    previous:
                        $("html").attr("dir") == "rtl" ? "&rarr;" : "&larr;",
                },
            },

            pageLength: 10,
            lengthMenu: [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"],
            ],
            buttons: {
                dom: {
                    button: {
                        className: "btn btn-light",
                    },
                },
                buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
            },
        });
    };

    // Return objects assigned to module

    return {
        init: function () {
            _componentDatatableBasic();
        },
    };
})();

// Initialize module
// ------------------------------

document.addEventListener("DOMContentLoaded", function () {
    DatatableBasic.init();
});

/* ------------------------------------------------------------------------------
 *
 *  # Sweet Alert
 *
 * ---------------------------------------------------------------------------- */

var SweetAlert = (function () {
    var _componentSweetAlert = function () {
        if (typeof swal == "undefined") {
            console.warn("Warning - sweet_alert.min.js is not loaded.");
            return;
        }

        // Defaults
        var swalInit = swal.mixin({
            buttonsStyling: false,
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-light",
                denyButton: "btn btn-light",
                input: "form-control",
            },
        });

        // // Warning alert
        // $("#sweet_warning").on("click", function () {
        //     swalInit.fire({
        //         title: "Are you sure?",
        //         text: "You will not be able to recover this imaginary file!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonText: "Yes, delete it!",
        //     });
        // });

        // Alert combination
        $(".sweet_combine").on("click", function () {
            swalInit
                .fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    buttonsStyling: false,
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger",
                    },
                })
                .then(function (result) {
                    if (result.value) {
                        swalInit.fire(
                            "Deleted!",
                            "Your file has been deleted.",
                            "success"
                        );
                    } else if (result.dismiss === swal.DismissReason.cancel) {
                        swalInit.fire(
                            "Cancelled",
                            "Your imaginary file is safe :)",
                            "error"
                        );
                    }
                });
        });
    };

    return {
        initComponents: function () {
            _componentSweetAlert();
        },
    };
})();

// Initialize module
// ------------------------------

document.addEventListener("DOMContentLoaded", function () {
    SweetAlert.initComponents();
});



//--------------------------------------------------------------------------------------------


function delete_record(id,path,message) {

    swal({
            title: "Are you sure?",
            text: "Your record will be "+ message+"!",
            icon: "warning",
            buttons: true,
            dangerMode: true, 
        })
        .then((willDelete) => {

            if (willDelete) {
                //alert(id);
                $.ajax({
                    url: path,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    success: function(msg) {
                        //alert(msg);
                        if (msg == "1") {
                            swal({
                                title: "Record "+message+" successfully'",
                                type: "success",
                            });
                            $("#" + id).closest("tr").remove();
                        }
                        else{
                            swal({
                                title: "sorry! Record not deleted.'",
                                type: "error",
                            });
                        }
                    }
                });

              
            }
        });
}


//----------------------------------------------------------------------------------

//Multiple Record Delete

//----------------------------------------------------------------------------------

function delete_selected(message,path) {
    var ids = [];

    $(".checkbox:checked").each(function() {
        var id = $(this).attr('id');
        ids.push(id);
    });
    if (ids == '') {
        //alert('select records before delete!');
        swal("Please Select records!", "...to "+ message +"!");
        preventDefault();
    }
    swal({
            title: "Are you sure?",
            text: "Your records will be "+message+"!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                //alert(ids);

                $.ajax({
                    url: path,
                    type: 'POST',
                    data: {
                        ids: ids
                    },
                    success: function(msg) {
                        //alert(msg);
                        if (msg == "1") {
                            swal({
                                title: "Records "+message+" successfully'",
                                type: "success",
                            });

                            $(ids).each(function(index, element) {
                                $("#" + element).closest("tr").remove();
                            });

                        }
                    }
                });

                swal({
                    title: "sorry! Record not deleted.'",
                    type: "error",
                });
            }

        });
}

//----------------------------------------------------------------------------------------------------------------------
//check all checkboxes

function checkall() {
      
      $("#CheckAll").click(function() {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });

}