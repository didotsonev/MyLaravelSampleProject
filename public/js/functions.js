$(document).ready(function() {
    $('#companiesDataTable').DataTable({
        "language": {
        "lengthMenu": window.lang.dt_lengthMenu,
            "search": window.lang.dt_search,
            "info": window.lang.dt_info,
            "paginate": {
                "next": window.lang.dt_next,
                "previous": window.lang.dt_previous
            },
        }
    });
});

function createCompany() {
    var create_company_form = new FormData($('#createCompanyForm')[0]);

    $.ajax({
        url: Laravel.base_url +'/company',
        type: 'POST',
        processData: false,
        contentType: false,
        data: create_company_form,
    }).done(function (data) {
        $('#createCompanyError').hide();

        hideModal('#createCompanyModal');

        $("#createCompanyForm")[0].reset();

        //destroy the datatable
        $('#companiesDataTable').DataTable().destroy();

        //append the last row
        jQuery("#companiesDataTable tbody").append(data);

        //draw the datatable again
        $('#companiesDataTable').DataTable({
            "language": {
                "lengthMenu": window.lang.dt_lengthMenu,
                "search": window.lang.dt_search,
                "info": window.lang.dt_info,
                "paginate": {
                    "next": window.lang.dt_next,
                    "previous": window.lang.dt_previous
                },
            }
        });

        //go to the last datatable page
        $("#companiesDataTable").DataTable().page('last').draw('page');

    }).fail(function (data) {
        $('#createCompanyError').show();
        $('#createCompanyError').html(errorsHtmlDiv(data));
    });
}

function showCompany(companyId) {
    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId,
        type: 'GET'
    }).done(function (data) {
        $('#showCompanyModal .modal-dialog').html(data);
        $('#showCompanyModal').modal('show');
    }).fail(function (data) {
        unexpectedError();
    });
}

function deleteCompany(companyId) {
    hideModal("#showCompanyModal");

    bootbox.confirm({
        message: window.lang.delete_company_question,
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: 'No',
                className: 'btn-success'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({
                    url: Laravel.base_url +'/company/'+ companyId,
                    type: 'DELETE',
                }).done(function (data) {

                    $('#companiesDataTable').DataTable().row($("#company_" + companyId)).remove().draw();
                }).fail(function (data) {
                    unexpectedError();
                });
            } else {
                $('#showCompanyModal').modal('show');
            }
        }
    });
}

function editCompany(companyId) {
    hideModal("#showCompanyModal");

    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId + '/edit',
        type: 'GET'
    }).done(function (data) {
        $('#editCompanyModal').modal('show');

        $('#editCompanyForm').html(data);
        $('#updateCompany').attr('onclick', "updateCompany("+ companyId +")");
    }).fail(function (data) {
        unexpectedError();
    });
}

function updateCompany(companyId) {
    var updateCompanyForm = new FormData($('#editCompanyForm')[0]);

    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId,
        type: 'POST',
        processData: false,
        contentType: false,
        data: updateCompanyForm,
    }).done(function (data) {
        hideModal("#editCompanyModal");
        $('#editCompanyError').hide();
        bootbox.alert(window.lang.company_successfully_updated);
        $("#company_"+ companyId).html(data);

    }).fail(function (data) {
        $('#editCompanyError').show();
        $('#editCompanyError').html(errorsHtmlDiv(data));
    });
}

function createEmployee(companyId) {
    hideModal("#showCompanyModal");

    $('#createEmployeeModal').modal('show');
    $('#employeeCompanyId').val(companyId);
}

function storeEmployee() {
    var create_employee_form = new FormData($('#createEmployeeForm')[0]);
    var company_id = create_employee_form.get('company_id');

    $.ajax({
        url: Laravel.base_url +'/company/'+ company_id +'/employee',
        type: 'POST',
        processData: false,
        contentType: false,
        data: create_employee_form,
    }).done(function (data) {
        $('#createEmployeeError').hide();
        hideModal("#createEmployeeModal");

        showCompany(company_id);

        $("#createEmployeeForm")[0].reset();
    }).fail(function (data) {
        $('#createEmployeeError').show();
        $('#createEmployeeError').html(errorsHtmlDiv(data));
    });
}

function showEmployee(companyId, employeeId) {
    hideModal("#showCompanyModal");

    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId +'/employee/'+ employeeId,
        type: 'GET'
    }).done(function (data) {
        $('#showEmployeeModal .modal-dialog').html(data);
        $('#showEmployeeModal').modal('show');
    }).fail(function (data) {
        unexpectedError();
    });
}

function editEmployee(companyId, employeeId) {
    hideModal("#showEmployeeModal");

    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId +'/employee/'+ employeeId +'/edit',
        type: 'GET',
    }).done(function (data) {
        $('#editEmployeeModal').modal('show');

        $('#editEmployeeForm').html(data);
        $('#updateEmployee').attr('onclick', "updateEmployee("+ companyId +", "+ employeeId +")");
    }).fail(function (data) {
        unexpectedError();
    });
}

function updateEmployee(companyId, employeeId) {
    var updateEmployeeForm = new FormData($('#editEmployeeForm')[0]);

    $.ajax({
        url: Laravel.base_url +'/company/'+ companyId +'/employee/'+ employeeId,
        type: 'POST',
        processData: false,
        contentType: false,
        data: updateEmployeeForm,
    }).done(function (data) {
        $('#editEmployeeError').hide();
        hideModal("#editEmployeeModal");
        bootbox.alert({
            message: window.lang.employee_successfully_updated,
            callback: function () {
                showEmployee(companyId, employeeId);
            }
        })

    }).fail(function (data) {
        $('#editEmployeeError').show();
        $('#editEmployeeError').html(errorsHtmlDiv(data));
    });
}

function deleteEmployee(companyId, employeeId) {
    hideModal("#showEmployeeModal");

    bootbox.confirm({
        message: window.lang.delete_employee_question,
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: 'No',
                className: 'btn-success'
            }
        },
        callback: function (result) {
            if (result) {
                $.ajax({
                    url: Laravel.base_url + '/company/'+ companyId +'/employee/'+ employeeId,
                    type: 'DELETE',
                }).done(function (data) {

                    bootbox.alert({
                        message: window.lang.employee_successfully_deleted,
                        callback: function () {
                            showCompany(companyId);
                        }
                    })
                }).fail(function (data) {
                    unexpectedError();
                });
            } else {
                $('#showEmployeeModal').modal('show');
            }
        }
    });
}