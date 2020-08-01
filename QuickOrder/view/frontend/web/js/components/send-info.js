define([
        'uiComponent',
        'jquery',
        'Magento_Ui/js/modal/modal',
        'mage/url'
    ],
    function (
        Component,
        $,
        modal,
        urlBuilder
    ) {
        'use strict';

        $(function () {

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

            let popup = modal(options, $('#quick-order-form'));

            $("#quick-order-button").bind('click', function () {
                $("#quick-order-form").modal("openModal");
            });

            $("#sendInfo").click(function () {
                let name, phone, email, sku;

                name = $("#customerName").val();
                phone = $("#customerPhone").val();
                email = $("#customerEmail").val();
                sku = $("#product_addtocart_form").attr("data-product-sku")

                let data = {
                    'name': name,
                    'phone': phone,
                    'email': email,
                    'sku': sku
                };

                let url = urlBuilder.build('q_order/record/add');

                $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    dataType: 'json'
                }).done(function (response) {
                    console.log(response);
                    this.closeModal();
                }).fail(function (error) {
                    console.log(JSON.stringify(error))
                });
            });
        });
    }
);
