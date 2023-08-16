'use strict';
import Vts from 'vts-form';
import './vts.config';
import Swal from 'sweetalert2';

$(function () {
  const login = new Vts('login-form', {
    ajax: {
      success: (data, response, form) => {
        window.location.reload();
      },
    },
  });
  console.log(login);
});
