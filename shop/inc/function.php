<?php 
    function alert($message,$type='alert-primary')
    {
        
?>
    <div class="alert <?php echo $type; ?>  alert-dismissible fade show" role="alert">
        <b><?php echo $message; ?> </b>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
    } //end of function
?>