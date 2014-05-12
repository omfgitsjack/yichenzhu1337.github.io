<?php
	$this->load->view('page_layout/head');

	echo site_url("../");

?>

<div class="navbar navbar-static-top navbar-inverse">
<div class="navbar-inner">
  <a class="brand"> brands </a>
  <ul class="nav">
    <li></li>
    <li></li>
  </ul>
</div>
</div>

<div class="container">
<div class="row">
  <div class="span9">
    <section>
      <h1> Page name</h1>
    </section>
  </div>

  <div class="span3">
    <section>
      <h1> Side Bar </h1>
			email
        <br>
        	another
    </section>
  </div>
</div>
</div>

<?php
$this->load->view('page_layout/tail');
?>

