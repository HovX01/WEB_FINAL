<!-- ================== BEGIN core-js ================== -->
<script src='/admin-asset/js/vendor.min.js'></script>
<script src='/admin-asset/js/app.min.js'></script>
<?php if (isset($script) && count($script) > 0) {
    foreach ($script as $item) {
        echo "<script src='{$item}'></script>";
    }
}
?>
</body>
</html>