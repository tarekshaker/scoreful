/**
 * Page User management
 */

'use strict';

// Datatable (js)
document.addEventListener('DOMContentLoaded', function (e) {
  let borderColor, bodyBg, headingColor;

  borderColor = config.colors.borderColor;
  bodyBg = config.colors.bodyBg;
  headingColor = config.colors.headingColor;

  // Variable declaration for table
  const dt_user_table = document.querySelector('.datatables-users'),
    userView = baseUrl + 'app/user/view/account',
    offCanvasForm = document.getElementById('offcanvasAddUser');

  // Select2 (generic, if any .select2 present)
  var select2 = $('.select2');
  if (select2.length) {
    var $this = select2;
    select2Focus($this);
    $this.select2({
      dropdownParent: $this.parent()
    });
  }

  // Add User form country select (Select2 with AJAX) - all countries with search & flags
  const $addUserCountry = $('#add-user-country');
  if ($addUserCountry.length) {
    $addUserCountry.select2({
      placeholder: 'Select a country',
      allowClear: true,
      ajax: {
        url: baseUrl + 'user-list/countries',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return { q: params.term || '' };
        },
        processResults: function (data) {
          return {
            results: data.map(function (item) {
              return { id: item.id, text: item.text, flag_class: item.flag_class };
            })
          };
        },
        cache: true
      },
      dropdownParent: $addUserCountry.parent(),
      templateResult: function (item) {
        if (!item.id) return item.text;
        var iconHtml = item.flag_class ? '<i class="fi ' + item.flag_class + ' fis rounded-circle me-2"></i>' : '';
        var $tpl = $('<span>' + iconHtml + item.text + '</span>');
        return $tpl;
      },
      templateSelection: function (item) {
        return item.text || item.id || '';
      }
    });
  }

  // Country filter (Select2 with AJAX)
  const $countryFilter = $('#user-country-filter');
  if ($countryFilter.length) {
    $countryFilter.select2({
      placeholder: 'Filter by country',
      allowClear: true,
      ajax: {
        url: baseUrl + 'user-list/countries',
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return { q: params.term || '' };
        },
        processResults: function (data) {
          return {
            results: data.map(function (item) {
              return { id: item.id, text: item.text, flag_class: item.flag_class };
            })
          };
        },
        cache: true
      },
      dropdownParent: $countryFilter.parent(),
      templateResult: function (item) {
        if (!item.id) return item.text;
        var iconHtml = item.flag_class ? '<i class="fi ' + item.flag_class + ' fis rounded-circle me-2"></i>' : '';
        var $tpl = $('<span>' + iconHtml + item.text + '</span>');
        return $tpl;
      },
      templateSelection: function (item) {
        return item.text || item.id || '';
      }
    });
  }

  // Gender select (Select2 with icons, no search)
  const $addUserGender = $('#add-user-gender');
  if ($addUserGender.length) {
    function genderTemplate(item) {
      if (!item.id) return item.text;
      var val = (item.id || '').toString().toLowerCase();
      var iconClass = $(item.element).data('icon');
      if (!iconClass) {
        if (val === 'male') iconClass = 'ri ri-men-line';
        else if (val === 'female') iconClass = 'ri ri-women-line';
        else iconClass = 'ri ri-genderless-line';
      }
      return $('<span><i class="' + iconClass + ' me-2"></i>' + (item.text || item.id) + '</span>');
    }
    select2Focus($addUserGender);
    $addUserGender.select2({
      placeholder: 'Select gender',
      allowClear: true,
      minimumResultsForSearch: -1,
      dropdownParent: $addUserGender.parent(),
      templateResult: genderTemplate,
      templateSelection: function (item) { return genderTemplate(item); },
      escapeMarkup: function (m) { return m; }
    });
  }

  // ajax setup
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Users datatable
  if (dt_user_table) {
    const dt_user = new DataTable(dt_user_table, {
      processing: true,
      serverSide: true,
      ajax: {
        url: baseUrl + 'user-list',
        data: function (d) {
          const country = $('#user-country-filter').val();
          if (country) d.country_code = country;
        },
        dataSrc: function (json) {
          // Ensure recordsTotal and recordsFiltered are numeric and not undefined/null
          if (typeof json.recordsTotal !== 'number') {
            json.recordsTotal = 0;
          }
          if (typeof json.recordsFiltered !== 'number') {
            json.recordsFiltered = 0;
          }

          // Fallback for empty data to avoid pagination NaN issue
          json.data = Array.isArray(json.data) ? json.data : [];

          return json.data;
        }
      },
      columns: [
        // columns according to JSON
        { data: 'id' },
        { data: 'id' },
        { data: 'name' },
        { data: 'email' },
        { data: 'country_name' },
        { data: 'email_verified_at' },
        { data: 'action' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          searchable: false,
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          searchable: false,
          orderable: false,
          targets: 1,
          render: function (data, type, full, meta) {
            return `<span>${full.fake_id}</span>`;
          }
        },
        {
          // User full name
          targets: 2,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            const { name } = full; // Destructuring to get 'name' from the 'full' object

            // For Avatar badge
            const stateNum = Math.floor(Math.random() * 6);
            const states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
            const state = states[stateNum];

            // Extract initials from the name
            const initials = (name.match(/\b\w/g) || []).shift() + (name.match(/\b\w/g) || []).pop();
            const initialsUpper = initials.toUpperCase();

            // Create avatar badge using template literals
            const avatar = `<span class="avatar-initial rounded-circle bg-label-${state}">${initialsUpper}</span>`;

            // Create full output for row using template literals
            const rowOutput = `
              <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                  <div class="avatar avatar-sm me-4">
                    ${avatar}
                  </div>
                </div>
                <div class="d-flex flex-column">
                  <a href="${userView}" class="text-truncate text-heading">
                    <span class="fw-medium">${name}</span></a>
                    <small>@${full['username']}</small>
                </div>
              </div>
            `;

            // Return the final output as HTML string
            return rowOutput;
          }
        },
        {
          // User email
          targets: 3,
          render: function (data, type, full, meta) {
            const email = full['email'];
            return '<span class="user-email">' + email + '</span>';
          }
        },
        {
          // Country column
          targets: 4,
          orderable: false,
          searchable: false,
          render: function (data, type, full, meta) {
            const flagClass = full['country_flag_class'];
            const countryName = full['country_name'] || '';
            const iconHtml = flagClass ? `<i class="fi ${flagClass} fis rounded-circle me-2"></i>` : '';
            return `<div class="d-flex align-items-center">${iconHtml}<span>${countryName}</span></div>`;
          }
        },
        {
          // email verify
          targets: 5,
          className: 'text-center',
          render: function (data, type, full, meta) {
            const verified = full['email_verified_at'];
            return `${
              verified
                ? '<i class="icon-base ri fs-4 ri-shield-check-line text-success"></i>'
                : '<i class="icon-base ri fs-4 ri-shield-line text-danger" ></i>'
            }`;
          }
        },
        {
          // Actions
          targets: 6,
          title: 'Actions',
          searchable: false,
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="d-flex align-items-center gap-4">' +
              `<button class="btn btn-icon btn-text-secondary btn-sm rounded-pill edit-record" data-id="${full['id']}" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i class="icon-base ri ri-edit-box-line icon-22px"></i></button>` +
              `<button class="btn btn-icon btn-text-secondary btn-sm rounded-pill delete-record" data-id="${full['id']}"><i class="icon-base ri ri-delete-bin-7-line icon-22px"></i></button>` +
              '<button class="btn btn-icon btn-text-secondary btn-sm rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="icon-base ri ri-more-2-line icon-22px"></i></button>' +
              '<div class="dropdown-menu dropdown-menu-end m-0">' +
              '<a href="' +
              userView +
              '" class="dropdown-item">View</a>' +
              '<a href="javascript:;" class="dropdown-item">Suspend</a>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[2, 'desc']],
      layout: {
        topStart: {
          rowClass: 'row m-3 my-0 justify-content-between',
          features: [
            {
              pageLength: {
                menu: [7, 10, 20, 50, 70, 100],
                text: '_MENU_'
              }
            }
          ]
        },
        topEnd: {
          features: [
            {
              search: {
                placeholder: 'Search by name or username or email',
                text: '_INPUT_'
              }
            },
            {
              buttons: [
                {
                  extend: 'collection',
                  className: 'btn btn-label-secondary dropdown-toggle',
                  text: '<i class="icon-base ri ri-upload-2-line me-2 icon-sm"></i>Export',
                  buttons: [
                    {
                      extend: 'print',
                      title: 'Users - Scoreful',
                      filename: function () {
                        const pad = n => String(n).padStart(2, '0');
                        const now = new Date();
                        const dateStr = `${pad(now.getDate())}-${pad(now.getMonth() + 1)}-${now.getFullYear()}_${pad(now.getHours())}_${pad(now.getMinutes())}`;
                        return `Users_${dateStr}`;
                      },
                      text: '<i class="icon-base ri ri-printer-line me-2" ></i>Print',
                      className: 'dropdown-item',
                      exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        // prevent avatar to be print
                        format: {
                          body: function (inner, coldex, rowdex) {
                            if (inner.length <= 0) return inner;

                            // Check if inner is HTML content
                            if (inner.indexOf('<') > -1) {
                              const parser = new DOMParser();
                              const doc = parser.parseFromString(inner, 'text/html');

                              // Get all text content
                              let text = '';

                              // Handle specific elements
                              const userNameElements = doc.querySelectorAll('.user-name');
                              if (userNameElements.length > 0) {
                                userNameElements.forEach(el => {
                                  // Get text from nested structure
                                  const nameText =
                                    el.querySelector('.fw-medium')?.textContent ||
                                    el.querySelector('.d-block')?.textContent ||
                                    el.textContent;
                                  text += nameText.trim() + ' ';
                                });
                              } else {
                                // Get regular text content
                                text = doc.body.textContent || doc.body.innerText;
                              }

                              return text.trim();
                            }

                            return inner;
                          }
                        }
                      },
                      customize: function (win) {
                        win.document.body.style.color = config.colors.headingColor;
                        win.document.body.style.borderColor = config.colors.borderColor;
                        win.document.body.style.backgroundColor = config.colors.bodyBg;
                        const table = win.document.body.querySelector('table');
                        table.classList.add('compact');
                        table.style.color = 'inherit';
                        table.style.borderColor = 'inherit';
                        table.style.backgroundColor = 'inherit';
                      }
                    },
                    {
                      extend: 'csv',
                      title: 'Users - Scoreful',
                      filename: function () {
                        const pad = n => String(n).padStart(2, '0');
                        const now = new Date();
                        const dateStr = `${pad(now.getDate())}-${pad(now.getMonth() + 1)}-${now.getFullYear()}_${pad(now.getHours())}_${pad(now.getMinutes())}`;
                        return `Users_${dateStr}`;
                      },
                      text: '<i class="icon-base ri ri-file-text-line me-2" ></i>Csv',
                      className: 'dropdown-item',
                      exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        format: {
                          body: function (inner, coldex, rowdex) {
                            if (inner.length <= 0) return inner;

                            // Parse HTML content
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(inner, 'text/html');

                            let text = '';

                            // Handle user-name elements specifically
                            const userNameElements = doc.querySelectorAll('.user-name');
                            if (userNameElements.length > 0) {
                              userNameElements.forEach(el => {
                                // Get text from nested structure - try different selectors
                                const nameText =
                                  el.querySelector('.fw-medium')?.textContent ||
                                  el.querySelector('.d-block')?.textContent ||
                                  el.textContent;
                                text += nameText.trim() + ' ';
                              });
                            } else {
                              // Handle other elements (status, role, etc)
                              text = doc.body.textContent || doc.body.innerText;
                            }

                            return text.trim();
                          }
                        }
                      }
                    },
                    {
                      extend: 'excel',
                      title: 'Users - Scoreful',
                      filename: function () {
                        const pad = n => String(n).padStart(2, '0');
                        const now = new Date();
                        const dateStr = `${pad(now.getDate())}-${pad(now.getMonth() + 1)}-${now.getFullYear()}_${pad(now.getHours())}_${pad(now.getMinutes())}`;
                        return `Users_${dateStr}`;
                      },
                      text: '<i class="icon-base ri ri-file-excel-line me-2"></i>Excel',
                      className: 'dropdown-item',
                      exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        format: {
                          body: function (inner, coldex, rowdex) {
                            if (inner.length <= 0) return inner;

                            // Parse HTML content
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(inner, 'text/html');

                            let text = '';

                            // Handle user-name elements specifically
                            const userNameElements = doc.querySelectorAll('.user-name');
                            if (userNameElements.length > 0) {
                              userNameElements.forEach(el => {
                                // Get text from nested structure - try different selectors
                                const nameText =
                                  el.querySelector('.fw-medium')?.textContent ||
                                  el.querySelector('.d-block')?.textContent ||
                                  el.textContent;
                                text += nameText.trim() + ' ';
                              });
                            } else {
                              // Handle other elements (status, role, etc)
                              text = doc.body.textContent || doc.body.innerText;
                            }

                            return text.trim();
                          }
                        }
                      }
                    },
                    {
                      extend: 'pdf',
                      title: 'Users - Scoreful',
                      filename: function () {
                        const pad = n => String(n).padStart(2, '0');
                        const now = new Date();
                        const dateStr = `${pad(now.getDate())}-${pad(now.getMonth() + 1)}-${now.getFullYear()}_${pad(now.getHours())}_${pad(now.getMinutes())}`;
                        return `Users_${dateStr}`;
                      },
                      text: '<i class="icon-base ri ri-file-pdf-line me-2"></i>Pdf',
                      className: 'dropdown-item',
                      exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        format: {
                          body: function (inner, coldex, rowdex) {
                            if (inner.length <= 0) return inner;

                            // Parse HTML content
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(inner, 'text/html');

                            let text = '';

                            // Handle user-name elements specifically
                            const userNameElements = doc.querySelectorAll('.user-name');
                            if (userNameElements.length > 0) {
                              userNameElements.forEach(el => {
                                // Get text from nested structure - try different selectors
                                const nameText =
                                  el.querySelector('.fw-medium')?.textContent ||
                                  el.querySelector('.d-block')?.textContent ||
                                  el.textContent;
                                text += nameText.trim() + ' ';
                              });
                            } else {
                              // Handle other elements (status, role, etc)
                              text = doc.body.textContent || doc.body.innerText;
                            }

                            return text.trim();
                          }
                        }
                      }
                    },
                    {
                      extend: 'copy',
                      title: 'Users - Scoreful',
                      filename: function () {
                        const pad = n => String(n).padStart(2, '0');
                        const now = new Date();
                        const dateStr = `${pad(now.getDate())}-${pad(now.getMonth() + 1)}-${now.getFullYear()}_${pad(now.getHours())}_${pad(now.getMinutes())}`;
                        return `Users_${dateStr}`;
                      },
                      text: '<i class="icon-base ri ri-file-copy-line me-2" ></i>Copy',
                      className: 'dropdown-item',
                      exportOptions: {
                        columns: [1, 2, 3, 4, 5],
                        format: {
                          body: function (inner, coldex, rowdex) {
                            if (inner.length <= 0) return inner;

                            // Parse HTML content
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(inner, 'text/html');

                            let text = '';

                            // Handle user-name elements specifically
                            const userNameElements = doc.querySelectorAll('.user-name');
                            if (userNameElements.length > 0) {
                              userNameElements.forEach(el => {
                                // Get text from nested structure - try different selectors
                                const nameText =
                                  el.querySelector('.fw-medium')?.textContent ||
                                  el.querySelector('.d-block')?.textContent ||
                                  el.textContent;
                                text += nameText.trim() + ' ';
                              });
                            } else {
                              // Handle other elements (status, role, etc)
                              text = doc.body.textContent || doc.body.innerText;
                            }

                            return text.trim();
                          }
                        }
                      }
                    }
                  ]
                },
                {
                  text: '<i class="icon-base ri ri-add-line icon-sm me-0 me-sm-2"></i><span class="d-none d-sm-inline-block">Add New User</span>',
                  className: 'add-new btn btn-primary',
                  attr: {
                    'data-bs-toggle': 'offcanvas',
                    'data-bs-target': '#offcanvasAddUser'
                  }
                }
              ]
            }
          ]
        },
        bottomStart: {
          rowClass: 'row mx-3 justify-content-between',
          features: [
            {
              info: {
                text: 'Showing _START_ to _END_ of _TOTAL_ entries'
              }
            }
          ]
        },
        bottomEnd: 'paging'
      },
      displayLength: 7,
      language: {
        paginate: {
          next: '<i class="icon-base ri ri-arrow-right-s-line scaleX-n1-rtl icon-22px"></i>',
          previous: '<i class="icon-base ri ri-arrow-left-s-line scaleX-n1-rtl icon-22px"></i>',
          first: '<i class="icon-base ri ri-skip-back-mini-line scaleX-n1-rtl icon-22px"></i>',
          last: '<i class="icon-base ri ri-skip-forward-mini-line scaleX-n1-rtl icon-22px"></i>'
        }
      },
      // For responsive popup
      responsive: {
        details: {
          display: DataTable.Responsive.display.modal({
            header: function (row) {
              const data = row.data();
              return 'Details of ' + data['name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            const data = columns
              .map(function (col) {
                return col.title !== '' // Do not show row in modal popup if title is blank (for check box)
                  ? `<tr data-dt-row="${col.rowIndex}" data-dt-column="${col.columnIndex}">
                      <td>${col.title}:</td>
                      <td>${col.data}</td>
                    </tr>`
                  : '';
              })
              .join('');

            if (data) {
              const div = document.createElement('div');
              div.classList.add('table-responsive');
              const table = document.createElement('table');
              div.appendChild(table);
              table.classList.add('table');
              const tbody = document.createElement('tbody');
              tbody.innerHTML = data;
              table.appendChild(tbody);
              return div;
            }
            return false;
          }
        }
      },
      initComplete: function () {
        // Remove btn-secondary from export buttons
        document.querySelectorAll('.dt-buttons .btn').forEach(btn => {
          btn.classList.remove('btn-secondary');
        });

      }
    });

    // Reload table when country filter changes
    if ($countryFilter.length) {
      $countryFilter.on('change', function () {
        dt_user.ajax.reload();
      });
    }

    // Delete Record
    document.addEventListener('click', function (e) {
      if (e.target.closest('.delete-record')) {
        const deleteBtn = e.target.closest('.delete-record');
        const user_id = deleteBtn.dataset.id;
        const dtrModal = document.querySelector('.dtr-bs-modal.show');

        // hide responsive modal in small screen
        if (dtrModal) {
          const bsModal = bootstrap.Modal.getInstance(dtrModal);
          bsModal.hide();
        }

        // sweetalert for confirmation of delete
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          customClass: {
            confirmButton: 'btn btn-primary me-3',
            cancelButton: 'btn btn-label-secondary'
          },
          buttonsStyling: false
        }).then(function (result) {
          if (result.value) {
            // delete the data
            fetch(`${baseUrl}user-list/${user_id}`, {
              method: 'DELETE',
              headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json'
              }
            })
              .then(response => {
                if (response.ok) {
                  dt_user.draw();

                  // success sweetalert
                  Swal.fire({
                    icon: 'success',
                    title: 'Deleted!',
                    text: 'The user has been deleted!',
                    customClass: {
                      confirmButton: 'btn btn-success'
                    }
                  });
                } else {
                  throw new Error('Delete failed');
                }
              })
              .catch(error => {
                console.log(error);
              });
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            Swal.fire({
              title: 'Cancelled',
              text: 'The User is not deleted!',
              icon: 'error',
              customClass: {
                confirmButton: 'btn btn-success'
              }
            });
          }
        });
      }
    });

    // edit record
    document.addEventListener('click', function (e) {
      if (e.target.closest('.edit-record')) {
        const editBtn = e.target.closest('.edit-record');
        const user_id = editBtn.dataset.id;
        const dtrModal = document.querySelector('.dtr-bs-modal.show');

        // hide responsive modal in small screen
        if (dtrModal) {
          const bsModal = bootstrap.Modal.getInstance(dtrModal);
          bsModal.hide();
        }

        // changing the title of offcanvas
        document.getElementById('offcanvasAddUserLabel').innerHTML = 'Edit User';

        // get data
        fetch(`${baseUrl}user-list/${user_id}/edit`)
          .then(response => response.json())
          .then(data => {
            document.getElementById('user_id').value = data.id;
            document.getElementById('add-user-fullname').value = data.name || '';
            document.getElementById('add-user-email').value = data.email || '';
            const usernameEl = document.getElementById('add-user-username');
            if (usernameEl) usernameEl.value = data.username || '';
            // Preselect country in Select2 if available
            if (data.country_code && $('#add-user-country').length) {
              const option = new Option(data.country_code, data.country_code, true, true);
              $('#add-user-country').append(option).trigger('change');
            } else if ($('#add-user-country').length) {
              $('#add-user-country').val(null).trigger('change');
            }
            if (data.gender && $('#add-user-gender').length) {
              const option = new Option(data.gender, data.gender, true, true);
              $('#add-user-gender').append(option).trigger('change');
            } else if ($('#add-user-gender').length) {
              $('#add-user-gender').val(null).trigger('change');
            }
            // // Preselect gender if provided (gender is a select control)
            // const genderEl = document.getElementById('add-user-gender');
            // if (genderEl) {
            //   if (data.gender) {
            //     const g = String(data.gender).toLowerCase();
            //     if (g === 'male' || g === 'female') {
            //       genderEl.value = g;
            //     }
            //   } else {
            //     genderEl.value = '';
            //   }
            // }
          });
      }
    });

    // changing the title
    const addNewBtn = document.querySelector('.add-new');
    if (addNewBtn) {
      addNewBtn.addEventListener('click', function () {
        document.getElementById('user_id').value = ''; //resetting input field
        document.getElementById('offcanvasAddUserLabel').innerHTML = 'Add User';
        // Clear fields explicitly to avoid residual state if offcanvas is already open
        const nameEl = document.getElementById('add-user-fullname');
        if (nameEl) nameEl.value = '';
        const emailEl = document.getElementById('add-user-email');
        if (emailEl) emailEl.value = '';
        const usernameEl = document.getElementById('add-user-username');
        if (usernameEl) usernameEl.value = '';
        // Clear country select2
        if (window.jQuery && $('#add-user-country').length) {
          window.__isResettingSelects = true;
          $('#add-user-country').val(null).trigger('change.select2');
          setTimeout(function(){ window.__isResettingSelects = false; }, 0);
        }
        // Clear gender select2
        if (window.jQuery && $('#add-user-gender').length) {
          window.__isResettingSelects = true;
          $('#add-user-gender').val(null).trigger('change.select2');
          setTimeout(function(){ window.__isResettingSelects = false; }, 0);
        }
        // // Clear gender select
        // const genderEl = document.getElementById('add-user-gender');
        // if (genderEl) genderEl.value = '';
      });
    }

    // Filter form control to default size
    setTimeout(() => {
      const elementsToModify = [
        { selector: '.dt-buttons .btn', classToRemove: 'btn-secondary' },
        { selector: '.dt-length .form-select', classToAdd: 'ms-0' },
        { selector: '.dt-length', classToAdd: 'mb-md-5 mb-0' },
        {
          selector: '.dt-layout-end',
          classToRemove: 'justify-content-between',
          classToAdd: 'd-flex gap-md-4 justify-content-md-between justify-content-center gap-md-2 flex-wrap mt-0'
        },
        { selector: '.dt-layout-start', classToAdd: 'mt-md-0 mt-5' },
        {
          selector: '.dt-layout-start .dt-buttons',
          classToAdd: 'd-md-flex d-block gap-4 justify-content-center'
        },
        {
          selector: '.dt-layout-end .dt-buttons',
          classToAdd: 'd-md-flex d-block gap-4 mb-md-0 mb-5 justify-content-center'
        },
        { selector: '.dt-layout-table', classToRemove: 'row mt-2' },
        { selector: '.dt-layout-full', classToRemove: 'col-md col-12' },
        { selector: '.dt-layout-full .table', classToAdd: 'table-responsive' }
      ];

      // Delete record
      elementsToModify.forEach(({ selector, classToRemove, classToAdd }) => {
        document.querySelectorAll(selector).forEach(element => {
          if (classToRemove) {
            classToRemove.split(' ').forEach(className => element.classList.remove(className));
          }
          if (classToAdd) {
            classToAdd.split(' ').forEach(className => element.classList.add(className));
          }
        });
      });

      // Autosize the DataTables search input to fit its placeholder/text without affecting vertical padding/height
      const searchInput = document.querySelector('.dt-search input[type="search"]');
      if (searchInput) {
        // Capture initial vertical metrics to prevent unintended changes
        const cs = getComputedStyle(searchInput);
        const initialHeight = cs.height;
        const initialPaddingTop = cs.paddingTop;
        const initialPaddingBottom = cs.paddingBottom;

        const fitSearchWidth = () => {
          const placeholder = searchInput.getAttribute('placeholder') || '';
          const value = searchInput.value || '';
          const minChars = 12;
          const chs = Math.max(placeholder.length, value.length, minChars) + 1; // a little padding
          // Keep Bootstrap default box-sizing (border-box) and only adjust width
          searchInput.style.width = chs + 'ch';
          searchInput.style.flex = '0 0 auto';
          // Ensure vertical metrics stay the same
          searchInput.style.height = initialHeight;
          searchInput.style.paddingTop = initialPaddingTop;
          searchInput.style.paddingBottom = initialPaddingBottom;
        };
        // Initial fit and on input
        fitSearchWidth();
        searchInput.addEventListener('input', fitSearchWidth);
      }
    }, 100);
  }

  // validating form and updating user's data
  const addNewUserForm = document.getElementById('addNewUserForm');

  // user form validation
  if (addNewUserForm) {
    const fv = FormValidation.formValidation(addNewUserForm, {
      fields: {
        name: {
          validators: {
            notEmpty: {
              message: 'Please enter full name'
            }
          }
        },
        email: {
          validators: {
            notEmpty: {
              message: 'Please enter email'
            },
            emailAddress: {
              message: 'The value is not a valid email address'
            }
          }
        },
        username: {
          validators: {
            notEmpty: {
              message: 'Please enter a username'
            }
          }
        },
        country_code: {
          validators: {
            notEmpty: {
              message: 'Please select a country'
            }
          }
        },
        gender: {
          validators: {
            notEmpty: {
              message: 'Please select gender'
            }
          }
        }
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger(),
        bootstrap5: new FormValidation.plugins.Bootstrap5({
          // Use this for enabling/changing valid/invalid class
          eleValidClass: '',
          rowSelector: function (field, ele) {
            // field is the field name & ele is the field element
            return '.form-control-validation';
          }
        }),
        submitButton: new FormValidation.plugins.SubmitButton(),
        autoFocus: new FormValidation.plugins.AutoFocus()
      }
    });

    // Revalidate Select2 fields on change/clear so invalid state is removed immediately
    // Use a guard to avoid revalidating during programmatic resets
    // Use a shared window flag so other handlers (like Add New button) can coordinate
    if (typeof window.__isResettingSelects === 'undefined') {
      window.__isResettingSelects = false;
    }

    var $countrySel = $('#add-user-country');
    if ($countrySel.length) {
      $countrySel.on('change.select2', function () {
        if (window.__isResettingSelects) return;
        fv.revalidateField('country_code');
      }).on('select2:clear', function () {
        if (window.__isResettingSelects) return;
        fv.revalidateField('country_code');
      });
    }
    var $genderSel = $('#add-user-gender');
    if ($genderSel.length) {
      $genderSel.on('change.select2', function () {
        if (window.__isResettingSelects) return;
        fv.revalidateField('gender');
      }).on('select2:clear', function () {
        if (window.__isResettingSelects) return;
        fv.revalidateField('gender');
      });
    }

    // Ensure default open state is clean (no errors shown). Reset on offcanvas open
    var offcanvasEl = document.getElementById('offcanvasAddUser');
    if (offcanvasEl) {
      offcanvasEl.addEventListener('show.bs.offcanvas', function () {
        try {
          if (fv) {
            fv.resetForm(true); // clears messages and classes; also resets values
          }
        } catch (err) {
          // ignore
        }
        // Make sure Select2 placeholders are shown
        if (window.jQuery) {
          window.__isResettingSelects = true;
          if ($('#add-user-country').length) {
            $('#add-user-country').val(null).trigger('change.select2');
          }
          if ($('#add-user-gender').length) {
            $('#add-user-gender').val(null).trigger('change.select2');
          }
          // Unset guard on next tick to avoid catching any cascading events
          setTimeout(function(){ window.__isResettingSelects = false; }, 0);
        }
      });
    }

    fv.on('core.form.valid', function () {
      // adding or updating user when form successfully validate
      const formData = new FormData(addNewUserForm);
      const formDataObj = {};

      // Convert FormData to URL-encoded string
      formData.forEach((value, key) => {
        formDataObj[key] = value;
      });

      const searchParams = new URLSearchParams();
      for (const [key, value] of Object.entries(formDataObj)) {
        searchParams.append(key, value);
      }

      fetch(`${baseUrl}user-list`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: searchParams.toString()
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.text();
        })
        .then(status => {
          // Refresh DataTable
          dt_user_table && new DataTable(dt_user_table).draw();

          // Hide offcanvas
          const offcanvasInstance = bootstrap.Offcanvas.getInstance(offCanvasForm);
          offcanvasInstance && offcanvasInstance.hide();

          // sweetalert
          Swal.fire({
            icon: 'success',
            title: `Successfully ${status}!`,
            text: `User ${status} Successfully.`,
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        })
        .catch(err => {
          // Hide offcanvas
          const offcanvasInstance = bootstrap.Offcanvas.getInstance(offCanvasForm);
          offcanvasInstance && offcanvasInstance.hide();

          Swal.fire({
            title: 'Duplicate Entry!',
            text: 'the email should be unique.',
            icon: 'error',
            customClass: {
              confirmButton: 'btn btn-success'
            }
          });
        });
    });

    // clearing form data when offcanvas hidden
    offCanvasForm.addEventListener('hidden.bs.offcanvas', function () {
      fv.resetForm(true);
    });
  }

  // Phone mask initialization
  const phoneMaskList = document.querySelectorAll('.phone-mask');

  // Phone Number
  if (phoneMaskList) {
    phoneMaskList.forEach(function (phoneMask) {
      phoneMask.addEventListener('input', event => {
        const cleanValue = event.target.value.replace(/\D/g, '');
        phoneMask.value = formatGeneral(cleanValue, {
          blocks: [3, 3, 4],
          delimiters: [' ', ' ']
        });
      });
      registerCursorTracker({
        input: phoneMask,
        delimiter: ' '
      });
    });
  }
});
