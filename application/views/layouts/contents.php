<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<?php
$this->load->view('partials/header')
?>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php
        $this->load->view('partials/navbar')
        ?>

        <!-- ========== App Menu ========== -->

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <?php
        $this->load->view('partials/sidebar')
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

            <?= $contents; ?>

            <?php
            $this->load->view('partials/footer')
            ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <?php
    // $this->load->view('partials/sidebar-right') 
    ?>

    <?php
    $this->load->view('partials/plugin')
    ?>


</body>

</html>