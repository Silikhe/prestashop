<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d51505a8be5820aa705a65a68ddc4330e896d86879fcdb2f66e28ad3670a6f1a */
class __TwigTemplate_995cc6edec98b0a9d76a053cb38af3d476021c454e49a6cf2808c56fe93daaca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/presta-duka/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/presta-duka/img/app_icon.png\" />

<title>Pages • Duka-Shoez</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCmsContent';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'KE';
    var _PS_VERSION_ = '1.7.7.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'f93528c502d8c0d2ccc5a7ab215fb3f3';
    var token_admin_orders = 'bd33abd8505788a4f87f4ef6ed8f5b59';
    var token_admin_customers = '2c82b88d4911e61957035328b86054d9';
    var token_admin_customer_threads = 'ecb524c9f4e7a1e5c6c3322c373a8253';
    var currentIndex = 'index.php?controller=AdminCmsContent';
    var employee_token = '16dc8c746be8ebea195603c420062c99';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/presta-duka/admin493r797ds/index.php/improve/modules/catalog/recommended?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ';
    var admin_notification_get_link = '/presta-duka/admin493r797ds/index.php/common/notifications?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ';
    var admin_notification_push_link = '/presta-duka/admin493r797ds/index.php/common/notifications/ack?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/presta-duka/admin493r797ds/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-duka/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-duka/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/presta-duka/admin493r797ds/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/presta-duka\\/admin493r797ds\\/\";
var baseDir = \"\\/presta-duka\\/\";
var changeFormLanguageUrl = \"\\/presta-duka\\/admin493r797ds\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\";
var currency = {\"iso_code\":\"KES\",\"sign\":\"KES\",\"name\":\"Kenyan Shilling\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"KES\",\"currencySymbol\":\"KES\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/presta-duka/admin493r797ds/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/js/admin.js?v=1.7.7.1\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/admin493r797ds/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/js/tools.js?v=1.7.7.1\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/admin493r797ds/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/admin493r797ds/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/presta-duka/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/presta-duka/admin493r797ds/index.php/common/notifications?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 95
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-en admincmscontent\"
  data-base-url=\"/presta-duka/admin493r797ds/index.php\"  data-token=\"TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminDashboard&amp;token=fead90bc783f977b2a7d3ba6394a86e8\"></a>
      <span id=\"shop_version\">1.7.7.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=74d4b21223696af1648dccb8f9533395\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php/improve/modules/manage?token=e187436116ec32ea3edf0fbfc76b7620\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php/sell/catalog/categories/new?token=e187436116ec32ea3edf0fbfc76b7620\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php/sell/catalog/products/new?token=e187436116ec32ea3edf0fbfc76b7620\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=7caf918a547723fff2d4a270677ecb8c\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminOrders&amp;token=bd33abd8505788a4f87f4ef6ed8f5b59\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"12\"
        data-icon=\"icon-AdminParentThemes\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/cms-pages\"
        data-post-link=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminQuickAccesses&token=4216351569394bd57a14905364d199e2\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Pages - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminQuickAccesses&token=4216351569394bd57a14905364d199e2\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/presta-duka/admin493r797ds/index.php?controller=AdminSearch&amp;token=dde4ec3865c5d8a126e0f9bad80c2313\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/presta-duka/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=9edd5ccaca39395dd37d790fa2c32457\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/waruidavid57%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back David Stephen</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/employees/1/edit?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\">
      <i class=\"material-icons\">settings</i>
      Your profile
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminLogin&amp;logout=1&amp;token=22f9407c064679b1c3cc52f834d9ca9f\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/presta-duka/admin493r797ds/index.php/configure/advanced/employees/toggle-navigation?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminDashboard&amp;token=fead90bc783f977b2a7d3ba6394a86e8\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/sell/orders/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/orders/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/orders/invoices/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/orders/credit-slips/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/orders/delivery-slips/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCarts&amp;token=9edd5ccaca39395dd37d790fa2c32457\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/sell/catalog/products?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/catalog/products?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/catalog/categories?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/catalog/monitoring/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminAttributesGroups&amp;token=521adf56b435ce8f93606eab31da184d\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/catalog/brands/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/attachments/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCartRules&amp;token=7caf918a547723fff2d4a270677ecb8c\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/stocks/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/sell/customers/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/customers/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/addresses/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCustomerThreads&amp;token=ecb524c9f4e7a1e5c6c3322c373a8253\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCustomerThreads&amp;token=ecb524c9f4e7a1e5c6c3322c373a8253\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/sell/customer-service/order-messages/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminReturn&amp;token=543d4f0ea8f9f234b5aea68d112c8acd\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminStats&amp;token=74d4b21223696af1648dccb8f9533395\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/improve/modules/manage?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/modules/manage?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/modules/catalog?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/themes/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/themes/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/themes-catalog/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/mail_theme/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/cms-pages/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/modules/positions/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminImages&amp;token=bf6e750127dfe37e774c45a26f880e73\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/modules/link-widget/list?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCarriers&amp;token=277f05f2e66b3a932268160a7e126358\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminCarriers&amp;token=277f05f2e66b3a932268160a7e126358\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/shipping/preferences?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/improve/payment/payment_methods?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/payment/payment_methods?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/payment/preferences?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/improve/international/localization/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/international/localization/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminZones&amp;token=6c370d1e17e9358c32628a5a07c99a31\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/international/taxes/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/improve/international/translations/settings?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/preferences/preferences?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/preferences/preferences?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/order-preferences/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/product-preferences/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/customer-preferences/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/contacts/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/shop/seo-urls/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminSearchConf&amp;token=bb5a65afb82febee9fb07f379bec0316\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/system-information/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/system-information/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/performance/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/administration/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/emails/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/import/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/employees/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/sql-requests/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/logs/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/presta-duka/admin493r797ds/index.php/configure/advanced/webservice-keys/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Design</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/presta-duka/admin493r797ds/index.php/improve/design/cms-pages/?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\" aria-current=\"page\">Pages</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Pages          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_category\"
                  href=\"/presta-duka/admin493r797ds/index.php/improve/design/cms-pages/category/new?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\"                  title=\"Add new page category\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new page category
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_cms_page\"
                  href=\"/presta-duka/admin493r797ds/index.php/improve/design/cms-pages/new?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\"                  title=\"Add new page\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Add new page
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/presta-duka/admin493r797ds/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminCmsContent%253Fversion%253D1.7.7.1%2526country%253Den/Help?_token=TUKC3GkD8NrQLVbY1nDTGNEdnlR5XYXhZ2ndLSJfEqQ\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1075
        $this->displayBlock('content_header', $context, $blocks);
        // line 1076
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1077
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1078
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1079
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/presta-duka/admin493r797ds/index.php?controller=AdminDashboard&amp;token=fead90bc783f977b2a7d3ba6394a86e8\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=waruidavid57%40gmail.com&amp;firstname=David+Stephen&amp;lastname=Njuguna&amp;website=http%3A%2F%2Flocalhost%2Fpresta-duka%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/presta-duka/admin493r797ds/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=waruidavid57%40gmail.com&amp;firstname=David+Stephen&amp;lastname=Njuguna&amp;website=http%3A%2F%2Flocalhost%2Fpresta-duka%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1186
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 95
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1075
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1076
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1077
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1078
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1186
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__d51505a8be5820aa705a65a68ddc4330e896d86879fcdb2f66e28ad3670a6f1a";
    }

    public function getDebugInfo()
    {
        return array (  1276 => 1186,  1271 => 1078,  1266 => 1077,  1261 => 1076,  1256 => 1075,  1247 => 95,  1239 => 1186,  1130 => 1079,  1127 => 1078,  1124 => 1077,  1121 => 1076,  1119 => 1075,  135 => 95,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d51505a8be5820aa705a65a68ddc4330e896d86879fcdb2f66e28ad3670a6f1a", "");
    }
}
