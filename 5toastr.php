    <!-- Toastr -->
    <script src="<?= URL; ?>plugins/toastr/toastr.min.js"></script>
    
    <?php if(isset($_SESSION['Mysqli_Error'])){ if (strlen($_SESSION['Mysqli_Error']) >= 5){ ?>
        <script type="text/javascript">
            toastr.error(`<?= $_SESSION['Mysqli_Error']; ?>`);
        </script>
    <?php } unset($_SESSION['Mysqli_Error']); } ?>
    
    <!--TRUE-->
    <?php if(isset($_SESSION['SMStrue'])){ if (strlen($_SESSION['SMStrue']) >= 5){ ?>
        <script type="text/javascript">
            toastr.success(`<?= $_SESSION['SMStrue']; ?>`);
        </script>
    <?php } unset($_SESSION['SMStrue']); } ?>

    <?php if(isset($_SESSION['SMStrue2'])){ if (strlen($_SESSION['SMStrue2']) >= 5){ ?>
        <script type="text/javascript">
            toastr.success(`<?= $_SESSION['SMStrue2']; ?>`);
        </script>
    <?php } unset($_SESSION['SMStrue2']); } ?>

    <?php if(isset($_SESSION['SMStru3'])){ if (strlen($_SESSION['SMStru3']) >= 5){ ?>
        <script type="text/javascript">
            toastr.success(`<?= $_SESSION['SMStru3']; ?>`);
        </script>
    <?php } unset($_SESSION['SMStru3']); } ?>
    

    <!--FLASE-->
    <?php if(isset($_SESSION['SMSfalse'])){ if (strlen($_SESSION['SMSfalse']) >= 5){ ?>
        <script type="text/javascript">
            toastr.error(`<?= $_SESSION['SMSfalse']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSfalse']); } ?>

    <?php if(isset($_SESSION['SMSfalse2'])){ if (strlen($_SESSION['SMSfalse2']) >= 5){ ?>
        <script type="text/javascript">
            toastr.error(`<?= $_SESSION['SMSfalse2']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSfalse2']); } ?>

    <?php if(isset($_SESSION['SMSfalse3'])){ if (strlen($_SESSION['SMSfalse3']) >= 5){ ?>
        <script type="text/javascript">
            toastr.error(`<?= $_SESSION['SMSfalse3']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSfalse3']); } ?>


    <!--NULL-->
    <?php if(isset($_SESSION['SMSnull'])){ if (strlen($_SESSION['SMSnull']) >= 5){ ?>
        <script type="text/javascript">
            toastr.warning(`<?= $_SESSION['SMSnull']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSnull']); } ?>

    <?php if(isset($_SESSION['SMSnull2'])){ if (strlen($_SESSION['SMSnull2']) >= 5){ ?>
        <script type="text/javascript">
            toastr.warning(`<?= $_SESSION['SMSnull2']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSnull2']); } ?>

    <?php if(isset($_SESSION['SMSnull3'])){ if (strlen($_SESSION['SMSnull3']) >= 5){ ?>
        <script type="text/javascript">
            toastr.warning(`<?= $_SESSION['SMSnull3']; ?>`);
        </script>
    <?php } unset($_SESSION['SMSnull3']); } ?>


    <!--DG-ERROR-->
    <?php if(isset($_SESSION['dg_error'])){ if (strlen($_SESSION['dg_error']) >= 5){ ?>
        <script type="text/javascript">
            toastr.error(`<?= $_SESSION['dg_error']; ?>`);
        </script>
    <?php } unset($_SESSION['dg_error']); } ?>

    
    <!--EMAIL-->
    <?php if(isset($_SESSION['mensjEmail'])){ 
            if ($_SESSION['mensjEmail']=="send"){
                ?>
                <script type="text/javascript">
                    toastr.success(`Su correo electrónico fué enviado con éxito.`);
                </script>
                <?php
            }else{
                ?>
                <script type="text/javascript">
                    toastr.danger(`Lo sentimos no se logró enviar su correo electrónico.`);
                </script>
                <?php
            }
            unset($_SESSION['mensjEmail']);
        }
    ?>

    <?php
        if (isset($_SESSION['stat'])) { unset($_SESSION['stat']); }
        if (isset($_SESSION['stat2'])) { unset($_SESSION['stat2']); }
        if (isset($_SESSION['stat3'])) { unset($_SESSION['stat3']); }
    ?>
