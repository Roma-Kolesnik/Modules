define(
    [
        'jquery',
        'Magento_Ui/js/modal/modal',
        'Magento_Customer/js/customer-data'
    ], function ($, modal, customerData) {
        'use strict';

        return function (catalogAddToCart) {
            $.widget('mage.catalogAddToCart', catalogAddToCart, {
                submitForm: function (form) {

                    var self = this;

                    if (customerData.get('customer')().firstname) {

                        var options = {
                            type: 'popup',
                            title: $.mage.__('Title'),
                            modalClass: 'stock-popup',
                            responsive: true,
                            buttons: [{
                                text: $.mage.__('Yes'),
                                click: function () {
                                    let _self = this;

                                    $.ajax({
                                        url: BASE_URL + 'stock/record/add', // TODO Refactoring
                                        data: {record: 1},
                                        type: "POST",
                                        dataType: 'json'
                                    }).done(function (response) {
                                        _self.closeModal();
                                        self.ajaxSubmit(form);

                                    }).fail(function (error) {
                                        console.log(JSON.stringify(error))
                                    });
                                }
                            },{
                                text: $.mage.__('No'),
                                click: function () {
                                    this.closeModal();
                                    self.ajaxSubmit(form);
                                }
                            }]
                        };

                        $('#popup-modal').modal(options).modal("openModal");
                    } else {
                        this._super(form);
                    }

                }
            });
        }
    });
