var KTApprtiApplicationResponseSave = function () {
    var jsonURL = $('#urlListData').attr('data-info');
    var crudUrlTemplate = JSON.parse(jsonURL);
    var _officeAdd;
    var _handleOfficeAddForm = function(e) {
    var validation;
    var form = document.getElementById('kt_rtiApplicationResponse_add_form');
       // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
       validation = FormValidation.formValidation(
             form,
             {
                fields: {
                  registration_number: {
                         validators: {
                            notEmpty: {
                               message: 'This field is required'
                            },
                            // regexp: {
                            //    regexp: /^[A-Za-z0-9-' ]*$/,
                            //    message: 'This field can consist of alphabetical characters, spaces, digits only'
                            // },
                         },
                   },
                },
                plugins: {
                   trigger: new FormValidation.plugins.Trigger(),
                   bootstrap: new FormValidation.plugins.Bootstrap5()
                }
             }
       );
       $('.submit-rtiApplicationResponse-btn').click( function(e) {
             e.preventDefault();
             validation.validate().then(function(status) {
                if (status == 'Valid') {
                   submitButton.setAttribute('data-kt-indicator', 'on');
                   submitButton.disabled = true;
                   //$('#examAddModal').modal('hide');
                  var formData= new FormData(form);
                  //formData.append("kt_description_en", $('#kt_summernote_en').summernote('code'));
                  //formData.append("kt_description_hi", $('#kt_summernote_hi').summernote('code'));
                axios.post(crudUrlTemplate.create,
                           formData, {
                   }).then(function (response) {
                   if (response.data.status ==200) {
                      toastr.success(
                         "New added successfully!", 
                         "New RTI!", 
                         {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      setTimeout(function() {
                         if (history.scrollRestoration) {
                            history.scrollRestoration = 'manual';
                         }
                         location.href = 'rtiapplicationresponses-create'; // reload page
                      }, 1500);
                      
                   } else {
                     console.log(response.data)
                      toastr.error(
                          response.data.message, 
                         "Something went wrong!", 
                         {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      }
                   })
                   .catch(function (error) {
                         toastr.error(
                            "Sorry, looks like there are some errors detected, please try again B.", 
                            "Something went wrong!", 
                            {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                         );
                      }).then(() => {
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');
                            // Enable button
                            submitButton.disabled = false;
                      });
                   } else {
                         toastr.error(
                               "Sorry, looks like there are some errors detected, please try again K.", 
                               "Something went wrong!", 
                               {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                            );
                      }
                })
             });
       }
 return {
         init: function () {
             _officeAdd = $('#kt_rtiApplicationResponse_add_form');
             _handleOfficeAddForm();
             submitButton = document.querySelector('#kt_rtiApplicationResponse_rti_submit');
             // Handle forms
         }
     };
 }();
 
 jQuery(document).ready(function() {
    KTApprtiApplicationResponseSave.init();
 });