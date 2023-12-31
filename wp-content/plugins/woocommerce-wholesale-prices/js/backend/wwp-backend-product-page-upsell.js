jQuery(document).ready(function ($) {
  var backend_product_page = {
    init: function () {
      this.initialize_event();
      $(document.body).on("woocommerce_variations_added", this.initialize_event);
      $("#woocommerce-product-data").on("woocommerce_variations_loaded", this.initialize_event);
    },
    initialize_event: function () {
      $(".wholesale-prices-options-group a.price-levels")
        .off()
        .on("click", function (e) {
          e.preventDefault();
          if (_.size(vex.getAll()) === 0) {
            vex.dialog.open({
              className: "vex-theme-plain vex-wwpp-upsell",
              showCloseButton: true,
              unsafeMessage:
                '<img class="logo" src="' +
                backend_product_page_upsell_args.images_url +
                'logo.png" > ' +
                backend_product_page_upsell_args.wholesale_prices.title +
                backend_product_page_upsell_args.wholesale_prices.msg +
                '<div class="actions">' +
                '<a class="vex-btn" target="_blank" href="' +
                backend_product_page_upsell_args.wholesale_prices.link +
                '">' +
                backend_product_page_upsell_args.button_text +
                "</a>" +
                '<img class="5star" src="' +
                backend_product_page_upsell_args.images_url +
                '5star.png"></div>' +
                '<div class="bonus">' +
                backend_product_page_upsell_args.bonus_text +
                "</div>",
              buttons: [],
            });
          }
        });

      // Product Visibility Field initialization
      $("#wholesale-visibility-select")
        .chosen()
        .change(function (e) {
          e.preventDefault();
          if (_.size(vex.getAll()) === 0) {
            vex.dialog.open({
              className: "vex-theme-plain vex-wwpp-upsell",
              showCloseButton: true,
              unsafeMessage:
                '<img class="logo" src="' +
                backend_product_page_upsell_args.images_url +
                'logo.png" > ' +
                backend_product_page_upsell_args.product_visibility.title +
                backend_product_page_upsell_args.product_visibility.msg +
                '<div class="actions">' +
                '<a class="vex-btn" target="_blank" href="' +
                backend_product_page_upsell_args.product_visibility.link +
                '">' +
                backend_product_page_upsell_args.button_text +
                "</a>" +
                '<img class="5star" src="' +
                backend_product_page_upsell_args.images_url +
                '5star.png"></div>' +
                '<div class="bonus">' +
                backend_product_page_upsell_args.bonus_text +
                "</div>",
              buttons: [],
              afterClose: function () {
                $("#wholesale-visibility-select").val("").trigger("chosen:updated");
              },
            });
          }
        });
        
      // Wholesale Sale Price Field initialization
      $("#woocommerce-product-data")
        .on("click", ".wholesale_sale_price, .wholesale_sale_discount, .wholesale_sale_price_dates_fields input", function (e) {
          e.preventDefault();
          if (_.size(vex.getAll()) === 0) {
            vex.dialog.open({
              className: "vex-theme-plain vex-wwpp-upsell",
              showCloseButton: true,
              unsafeMessage:
                '<img class="logo" src="' +
                backend_product_page_upsell_args.images_url +
                'logo.png" > ' +
                backend_product_page_upsell_args.wholesale_sale_price.title +
                backend_product_page_upsell_args.wholesale_sale_price.msg +
                '<div class="actions">' +
                '<a class="vex-btn" target="_blank" href="' +
                backend_product_page_upsell_args.wholesale_sale_price.link +
                '">' +
                backend_product_page_upsell_args.button_text +
                "</a>" +
                '<img class="5star" src="' +
                backend_product_page_upsell_args.images_url +
                '5star.png"></div>' +
                '<div class="bonus">' +
                backend_product_page_upsell_args.bonus_text +
                "</div>",
              buttons: [],
            });
          }
        });
      
      // Prevent wholesale sale price field label event
      $("#woocommerce-product-data")
        .on("click", "label[for*='_wholesale_sale_discount_dummy'], label[for*='_wholesale_sale_price_dummy']", function (e) {
          e.preventDefault();
      });
        
    },
  };

  backend_product_page.init();
});
