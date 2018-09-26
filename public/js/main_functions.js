function bootboxErrorAlert(message) {
    bootbox.alert({
        message: message,
        backdrop: true,
        onEscape: true,
    });
}

function errorsHtmlDiv(data) {
    var errors = data.responseJSON;

    errorsHtml = '<div class="alert alert-danger"><ul>';
    $.each( errors.errors , function( key, value ) {
        errorsHtml += '<li>'+ value +'</li>';
    });
    errorsHtml += '</ul></div>';

    return errorsHtml;
}

function bootboxErrors(data) {
    var errors = data.responseJSON;

    errorsHtml = '<div class="alert alert-danger"><ul>';
    $.each( errors.errors , function( key, value ) {
        errorsHtml += '<li>' + value + '</li>';
    });
    errorsHtml += '</ul></div>';

    bootbox.alert({
        title: window.lang.error_bootbox_title,
        message: errorsHtml,
        backdrop: true,
        onEscape: true,
    });
}

function viewError(error) {
    errorsHtml = '<div class="alert alert-danger"><ul>';
    errorsHtml += '<li>' + error + '</li>';
    errorsHtml += '</ul></div>';

    bootbox.alert({
        title: window.lang.error,
        message: errorsHtml,
        backdrop: true,
        onEscape: true,
    });
}

function unexpectedError() {
    errorsHtml = '<div class="alert alert-danger"><ul>';
    errorsHtml += '<li>' + window.lang.unexpected_error_message + '</li>';
    errorsHtml += '</ul></div>';

    bootbox.alert({
        title: window.lang.unexpected_error_title,
        message: errorsHtml,
        backdrop: true,
        onEscape: true,
    });
}

function hideModal(modalId) {
    $(modalId).modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
}