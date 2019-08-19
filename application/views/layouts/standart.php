
<html class="no-js">
<!--<![endif]-->

<head>

<?php $this->load->view("containers/head"); ?>

</head>

<body class="<?php $subview=="main"?"home page layout-full-width header-creative header-open minimalist-header sticky-white no-content-padding":"layout-full-width header-creative header-open minimalist-header sticky-white hide-title-area no-content-padding"?>" style="padding-left: 95px;">
    <div id="Header_creative">
        <a href="#" class="creative-menu-toggle"><i class="icon-menu"></i></a>
        <!--Social info area-->
        <ul class="social creative-social"></ul>
        <div class="creative-wrapper">
            <!-- Header -  Logo and Menu area -->
            <?php $this->load->view("containers/header"); ?>
            <!-- Header Top -  Info Area -->
            <div id="Action_bar">
                <!--Social info area-->
                <ul class="social"></ul>
            </div>
        </div>
    </div>
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->

        <!-- Main Content -->
        <div id="Content">
            <?php $this->load->view("subviews/".$subview); ?>
        </div>
        <!-- Footer-->
        <footer id="Footer" class="clearfix">
            <!-- Footer copyright-->
            <?php $this->load->view("containers/footer"); ?>
        </footer>
    </div>

    <!-- JS -->
    <?php $this->load->view("containers/foot"); ?>

</body>

</html>