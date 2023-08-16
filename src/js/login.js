'use strict';
// import Vts from 'vts-form';
import Vts from '../../../vts/src/Vts';
import './vts.config';
import Swal from 'sweetalert2';

$(function () {
  const login = new Vts('login-form', {
    ajax: {
      success: (data, response, form) => {
        form.reset();
        Swal.close();
        toggleLoginSwitch(true);
        $('#login-modal').modal('hide');
      },
    },
  });
  console.log(login);
});

function toggleLoginSwitch(loggedIn) {
  const loginSwitch = $('#login-switch');
  if (loggedIn) {
    loginSwitch.removeAttr('data-bs-toggle');
    loginSwitch.removeAttr('data-bs-target');
    loginSwitch.html('<i class="fa-solid fa-arrow-right-from-bracket"></i>');
  } else {
    loginSwitch.attr('data-bs-toggle', 'modal');
    loginSwitch.attr('data-bs-target', '#target-modal');
    loginSwitch.html('<i class="fa-solid fa-right-to-bracket"></i>');
  }
}
