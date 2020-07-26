define(
    [
        'uiComponent',
        'jquery',
        'Magento_Ui/js/modal/modal',
    ],
    function (Component, $, modal) {
        'use strict';

        let options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            title: 'Quick Order',
            buttons: [{
                text: $.mage.__('Close'),
                class: '',
                click: function () {
                    this.closeModal();
                }
            }]
        };

        let popup = modal(options, $("#quick-order-form"));
        $(document).ready(function () {
            $("#quick-order-button").bind('click', function () {
                $("#quick-order-form").modal("openModal");
            });
        });

        return Component.extend({
            defaults: {
                nameSelector: "#customerName",
                phoneSelector: "#customerPhone",
                emailSelector: "#customerEmail",
                skuSelector: $("#product_addtocart_form").attr("data-product-sku")
            },

            // initialize: function () {
            //     this._super();
            //     this.infoProvider();
            //     return this;
            // },

            sendInfo: function () {

                let name, phone, email, sku;

                name = $(this.nameSelector).val();
                phone = $(this.phoneSelector).val();
                email = $(this.emailSelector).val();
                //sku = $("#product_addtocart_form").attr("data-product-sku");
                sku = $(this.skuSelector);

                this.infoProvider({'name': name, 'phone': phone, 'email': email, 'sku': sku});
            },

            infoProvider: function (data = {}) {

                //let _self = this;

                $.ajax({
                    url: BASE_URL + 'q_order/record/add',
                    data: data,
                    type: 'POST',
                    dataType: 'json'
                }).done(function (response) {
                    //this.closeModal();
                    //self.ajaxSubmit(form);
                    console.log(response);
                }).fail(function (error) {
                    console.log(JSON.stringify(error))
                });
            }
        });
    }
);
