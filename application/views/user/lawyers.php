<?php $this->load->view('user/header' );   ?>


<br><br><br>
<div style="margin: 30px;">


<div id="demo"><br>
  <h1>Best Lawyers of India, Get a Contact and ask for Legal Advice.</h1>
  <br><br>

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Lawyer Name</th>
          <th>Lawyer E-mail</th>
          <th>Lawyer Mobile</th>
		  <th>Lawyer Information</th>
		  <th>Lawyer Fees</th>
        </tr>
      </thead>
      <tbody>
  <?php for($i=1;$i<=count($lawyers);$i++)
  {?>
        <tr>
          <td data-title="ID"><?php if(isset($lawyers[$i]['lawyer_name'])){ echo $i; }?></td>
          <td data-title="Name"><?php echo $lawyers[$i]['lawyer_name']; ?></td>
          <td data-title="Link"><?php echo $lawyers[$i]['lawyer_email']; ?></td>
          <td data-title="Status"><?php echo $lawyers[$i]['lawyer_phone']; ?></td>
		  <td data-title="Status"><?php echo $lawyers[$i]['lawyer_info']; ?></td>
		  <td data-title="Status"><?php echo $lawyers[$i]['lawyer_fees']; ?></td>
        </tr>
  <?php } ?>
       
      </tbody>
    </table>
  </div>
  


</div>
</div>
<?php $this->load->view('user/footer' );   ?>

<script>
/**
 * Created by Kupletsky Sergey on 05.11.14.
 *
 * Material Design Responsive Table
 * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
 * You can use this table in Bootstrap (v3) projects. Material Design Responsive Table CSS-style will override basic bootstrap style.
 * JS used only for table constructor: you don't need it in your project
 */

$(document).ready(function() {

    var table = $('#table');

    // Table bordered
    $('#table-bordered').change(function() {
        var value = $( this ).val();
        table.removeClass('table-bordered').addClass(value);
    });

    // Table striped
    $('#table-striped').change(function() {
        var value = $( this ).val();
        table.removeClass('table-striped').addClass(value);
    });
  
    // Table hover
    $('#table-hover').change(function() {
        var value = $( this ).val();
        table.removeClass('table-hover').addClass(value);
    });

    // Table color
    $('#table-color').change(function() {
        var value = $(this).val();
        table.removeClass(/^table-mc-/).addClass(value);
    });
});

// jQuery’s hasClass and removeClass on steroids
// by Nikita Vasilyev
// https://github.com/NV/jquery-regexp-classes
(function(removeClass) {

	jQuery.fn.removeClass = function( value ) {
		if ( value && typeof value.test === "function" ) {
			for ( var i = 0, l = this.length; i < l; i++ ) {
				var elem = this[i];
				if ( elem.nodeType === 1 && elem.className ) {
					var classNames = elem.className.split( /\s+/ );

					for ( var n = classNames.length; n--; ) {
						if ( value.test(classNames[n]) ) {
							classNames.splice(n, 1);
						}
					}
					elem.className = jQuery.trim( classNames.join(" ") );
				}
			}
		} else {
			removeClass.call(this, value);
		}
		return this;
	}

})(jQuery.fn.removeClass);
</script>