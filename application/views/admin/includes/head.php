<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

<!--begin::Web font -->
<script src="<?php echo base_url('assets/js/webfont.js') ?>"></script>
<script>
    WebFont.load({
        google: {
            "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
</script>

<!--end::Web font -->

<!--begin::Global Theme Styles -->
<link href="<?php echo base_url('assets/vendors/base/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />

<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
<link href="<?php echo base_url('assets/demo/default/base/style.bundle.css') ?>" rel="stylesheet" type="text/css" />

<!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

<!--end::Global Theme Styles -->

<!--begin::Page Vendors Styles -->
<link href="<?php echo base_url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />

<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

<!--end::Page Vendors Styles -->
<link rel="shortcut icon" href="<?php echo base_url('assets/demo/default/media/img/logo/favicon.ico') ?>" />

<!-- Favicon Icons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/favicon/apple-icon-57x57.png') ?>">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('assets/favicon/apple-icon-60x60.png') ?>">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/favicon/apple-icon-72x72.png') ?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/favicon/apple-icon-76x76.png') ?>">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/favicon/apple-icon-114x114.png') ?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/favicon/apple-icon-120x120.png') ?>">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/favicon/apple-icon-144x144.png') ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/favicon/apple-icon-152x152.png') ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/favicon/apple-icon-180x180.png') ?>">
<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/favicon/android-icon-192x192.png') ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/favicon/favicon-32x32.png') ?>">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/favicon/favicon-96x96.png') ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/favicon/favicon-16x16.png') ?>">
<link rel="manifest" href="<?php echo base_url('assets/favicon/manifest.json') ?>">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo base_url('assets/favicon/ms-icon-144x144.png') ?>">
<meta name="theme-color" content="#ed3236">


<style>
    .m-brand.m-brand--skin-dark {
        background-color: white;
    }

    .m-aside-left.m-aside-left--skin-dark {
        background-color: white;
    }

    .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item:not(.m-menu__item--parent):not(.m-menu__item--open):not(.m-menu__item--expanded):not(.m-menu__item--active):hover {
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s;
        background-color: #292b3a;
    }

    .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item:not(.m-menu__item--parent):not(.m-menu__item--open):not(.m-menu__item--expanded):not(.m-menu__item--active):hover {
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s;
        background-color: #e2e2e2;
    }

    .m-aside-menu.m-aside-menu--skin-dark .m-menu__nav>.m-menu__item.m-menu__item--open {
        -webkit-transition: background-color 0.3s;
        transition: background-color 0.3s;
        background-color: #ffffff;
    }

    .required:after {
        content: " *";
        color: red;
    }
    .strong {
        font-weight: 600;
    }
</style>