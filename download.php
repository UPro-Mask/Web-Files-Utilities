        <a href="files/<?php echo $_GET['file']; ?>" download="<?php echo $_GET['file']; ?>" id="dwnd">
            Download
        </a>
        <script>
            document.getElementById('dwnd').click();
        </script>
        <?php
            // Redirecting back
            // header("Location: " . $_SERVER["HTTP_REFERER"]);
         ?>
<script>
          window.close();
          window.history.back();
</script>
