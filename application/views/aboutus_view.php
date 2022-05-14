<?php

// Load header view
$this->load->view('header_view');
?>

<div>
 <?php echo $content; ?>
</div>

<?php
// Load footer view
$this->load->view('footer_view');