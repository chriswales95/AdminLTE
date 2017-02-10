<?php
    require "scripts/pi-hole/php/header.php";
?>
<!-- Title -->
<div class="page-header">
    <h1>Generate debug log</h1>
</div>

<p>Once you click this button a debug log will be generated and automatically uploaded if we detect a working internet connection</p>
<button class="btn btn-lg btn-primary btn-block" id="debugBtn">Generate debug log</button>
<pre id="output" style="width: 100%; height: 100%;" hidden="true"></pre>

<?php
    require "scripts/pi-hole/php/footer.php";
?>


<script src="scripts/pi-hole/js/debug.js"></script>
