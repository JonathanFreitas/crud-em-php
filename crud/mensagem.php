<?php
session_start();

if(isset($_SESSION['mensagem1'])){  ?>

<script>
    window.onload = function() {
      M.toast({html: '<?php echo $_SESSION['mensagem1']; ?>'}); 
    };
</script>
<?php
}
session_unset();

