/**
 *  Pages Authentication
 */
'use strict';

document.addEventListener('DOMContentLoaded', function () {
  (() => {
    const formAuthentication = document.querySelector('#formAuthentication');

    // Form validation for Add new record
    if (formAuthentication && typeof FormValidation !== 'undefined') {
      // Build fields config dynamically based on existing inputs to avoid null elements
      const fields = {};

      const hasField = name => !!formAuthentication.querySelector(`[name="${name}"]`);

      if (hasField('username')) {
        fields.username = {
          validators: {
            notEmpty: { message: 'Please enter username' },
            stringLength: { min: 6, message: 'Username must be more than 6 characters' }
          }
        };
      }

      if (hasField('email')) {
        fields.email = {
          validators: {
            notEmpty: { message: 'Please enter your email' },
            emailAddress: { message: 'Please enter a valid email address' }
          }
        };
      }

      if (hasField('email-username')) {
        fields['email-username'] = {
          validators: {
            notEmpty: { message: 'Please enter email / username' },
            stringLength: { min: 6, message: 'Username must be more than 6 characters' }
          }
        };
      }

      if (hasField('password')) {
        fields.password = {
          validators: {
            notEmpty: { message: 'Please enter your password' },
            stringLength: { min: 6, message: 'Password must be more than 6 characters' }
          }
        };
      }

      if (hasField('password_confirmation')) {
        fields['password_confirmation'] = {
          validators: {
            notEmpty: { message: 'Please confirm password' },
            identical: {
              compare: () => (formAuthentication.querySelector('[name="password"]') ? formAuthentication.querySelector('[name="password"]').value : ''),
              message: 'The password and its confirmation do not match'
            },
            stringLength: { min: 6, message: 'Password must be more than 6 characters' }
          }
        };
      }

      if (hasField('terms')) {
        fields.terms = {
          validators: {
            notEmpty: { message: 'Please agree to terms & conditions' }
          }
        };
      }

      FormValidation.formValidation(formAuthentication, {
        fields,
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap5: new FormValidation.plugins.Bootstrap5({
            eleValidClass: '',
            rowSelector: function (field, element) {
              // Be resilient to different wrappers (form-floating, input-group)
              // Return a selector that matches our nearest row container
              return '.form-control-validation, .mb-5, .mb-4, .mb-3';
            }
          }),
          submitButton: new FormValidation.plugins.SubmitButton(),
          defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
          autoFocus: new FormValidation.plugins.AutoFocus()
        },
        init: instance => {
          instance.on('plugins.message.placed', e => {
            // Guard against null parentElement in edge cases
            if (e.element && e.element.parentElement && e.element.parentElement.classList.contains('input-group')) {
              e.element.parentElement.insertAdjacentElement('afterend', e.messageElement);
            }
            // Also handle custom-option block layouts gracefully
            if (
              e.element &&
              e.element.parentElement &&
              e.element.parentElement.parentElement &&
              e.element.parentElement.parentElement.classList &&
              e.element.parentElement.parentElement.classList.contains('custom-option')
            ) {
              const row = e.element.closest('.form-control-validation, .mb-5, .mb-4, .mb-3');
              if (row && row.insertAdjacentElement) {
                row.insertAdjacentElement('afterend', e.messageElement);
              }
            }
          });
        }
      });
    }

    // Two Steps Verification for numeral input mask
    const numeralMaskElements = document.querySelectorAll('.numeral-mask');

    // Format function for numeral mask
    const formatNumeral = value => value.replace(/\D/g, ''); // Only keep digits

    if (numeralMaskElements.length > 0) {
      numeralMaskElements.forEach(numeralMaskEl => {
        numeralMaskEl.addEventListener('input', event => {
          numeralMaskEl.value = formatNumeral(event.target.value);
        });
      });
    }
  })();
});
