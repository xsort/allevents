$('#getEventForm')
                .formValidation({
                    fields: {
                        name: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 3,
                                }
                             }
                         },

                        phone: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 4,
                                },
                                numeric: {
                                },
                             }
                         },
                        
                        text: {
                            validators: {
                                notEmpty: {
                                },
                                stringLength: {
                                 min: 5,                                 
                                }
                            }
                         }
                    }
                })
                .on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();
        
                    var $form = $(e.target),
                        formData = new FormData(),
                        params   = $form.serializeArray(),
                        fv    = $(e.target).data('formValidation');
                        
                    $.each(params, function(i, val) {
                        formData.append(val.name, val.value);
                    });
                    
                    $.ajax({
                            url: $form.attr('action'),
                            data: formData,
                            async: true,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function(result) {
                                $('#getEvent').modal('toggle').hide();
                                swal("Поздравляем", "Ваше сообщение отправлено", "success");
                            }   
                        });

                });
$('#putEventForm')
                .formValidation({
                    fields: {
                        name: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 3,
                                }
                             }
                         },

                        phone: {
                             validators: {
                                notEmpty: {
                                },
                                 stringLength: {
                                 min: 4,
                                },
                                numeric: {
                                },
                             }
                         },
                        
                        text: {
                            validators: {
                                notEmpty: {
                                },
                                stringLength: {
                                 min: 5,                                 
                                }
                            }
                         }
                    }
                })
                .on('success.form.fv', function(e) {
                    // Prevent form submission
                    e.preventDefault();
        
                    var $form = $(e.target),
                        formData = new FormData(),
                        params   = $form.serializeArray(),
                        fv    = $(e.target).data('formValidation');
                        
                    $.each(params, function(i, val) {
                        formData.append(val.name, val.value);
                    });
                    
                    $.ajax({
                            url: $form.attr('action'),
                            data: formData,
                            async: true,
                            cache: false,
                            contentType: false,
                            processData: false,
                            type: 'POST',
                            success: function(result) {
                                $('#putEvent').modal('toggle').hide();
                                swal("Поздравляем", "Ваше сообщение отправлено", "success");
                            }   
                        });

                });
$('.mailerForm')
                .formValidation({
                    fields: {
                        clientEmail: {
                             validators: {
                                notEmpty: {
                                },
                                stringLength: {
                                 min: 4,
                                },
                                emailAddress: {
                                    
                                },
                                regexp: {
                                    regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                                }
                             }
                         }
                    }
                })
                .on('success.form.fv', function(e) {
                    e.preventDefault();
                });