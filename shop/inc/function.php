<?php 
    function alert($message,$type='alert-primary')
    {
        if(isset($message)==true)
        {
?>
            <div class="alert <?php echo $type; ?>  alert-dismissible fade show" role="alert">
                <b><?php echo $message; ?> </b>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
<?php
        } //end of if 
    } //end of function
?>