<?php 

for ($i=0; $i < 101; $i++) { 
    
    if ($i>0 && $i<20) { ?>
        
        <i><?php echo $i; ?></i>

<?php } else if ($i>=25 && $i<=50){ ?>

        <u><?php echo $i; ?></u>

<?php } else {
    echo $i;
} ?>

    <br>
    
<?php } ?>