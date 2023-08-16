'use strict';
// import Vts from 'vts-form';
import Vts from '../../../vts/src/Vts';
import Swal from 'sweetalert2';

$(function () {
  // set default config for vts
  Vts.setDefaults({
    ajax: {
      beforeSend: (requestInit, abortController) => {
        Swal.fire({
          title: 'Submitting...',
          icon: 'info',
          text: 'Please wait.',
          allowOutsideClick: false,
          showCancelButton: true,
          showConfirmButton: false,
          cancelButtonText: 'Cancel',
        }).then((result) => {
          if (result.dismiss === Swal.DismissReason.cancel) {
            abortController.abort();
          }
        });
      },
      success: (data, response, form) => {
        console.log(data);
        const isDataObj = typeof data === 'object';
        const title = isDataObj
          ? data.title
          : 'Server connection: ' + response.statusText;
        const message = isDataObj ? data.message : data;
        Swal.fire({
          title: title,
          html: message,
          icon: 'success',
        });
        form.classList.remove('was-validated');
        form.reset();
      },
      error: (errorData, errorResponse, form) => {
        console.table(errorData);
        console.log(errorResponse);
        let title =
          errorResponse?.statusText ||
          'Oops, sorry about that. An unknown error occurred.';
        let message = errorData;

        message = errorData?.message || message;
        message = message?.xdebug_message || message;

        const swalConfig = {
          title: title,
          icon: 'error',
        };
        if (typeof message === 'string') {
          swalConfig.title = message;
        } else {
          swalConfig.title = errorData?.title || errorData?.name || title;
          swalConfig.showCancelButton = true;
          swalConfig.cancelButtonText = 'View Error';
        }

        Swal.fire(swalConfig).then((result) => {
          if (result.dismiss === Swal.DismissReason.cancel) {
            var newWindow = window.open();
            if (newWindow) {
              newWindow.document.body.innerHTML = message;
            }
          }
        });
        // }
      },
    },
  });
});
