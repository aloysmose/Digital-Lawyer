<?php $this->load->view('user/header' );   ?>


<br><br><br>
<div style="margin: 30px;">


<div id="demo"><br>
  <h1>List of Acts of the Parliament of India</h1>
  <br><br>

  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name of Act</th>
          <th>Year</th>
          <th>Act No.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-title="ID">1</td>
          <td data-title="Name">Black Money (Undisclosed Foreign Income and Assets) and Imposition of Tax Act, 2015</td>
          <td data-title="Link">
           2015
          </td>
          <td data-title="Status">22</td>
        </tr>
        <tr>
          <td data-title="ID">2</td>
          <td data-title="Name">Citizenship (Amendment) Bill, 2015</td>
          <td data-title="Link">
       2015
          </td>
          <td data-title="Status">36</td>
        </tr>
        <tr>
          <td data-title="ID">3</td>
          <td data-title="Name">Securities Laws (Amendment) Act, 2014</td>
          <td data-title="Link">
            2014
          </td>
          <td data-title="Status">27</td>
        </tr>
        <tr>
          <td data-title="ID">4</td>
          <td data-title="Name">Street Vendors Act, 2014</td>
          <td data-title="Link">2014</td>
          <td data-title="Status">7</td>
        </tr>
        <tr>
          <td data-title="ID">5</td>
          <td data-title="Name">Lokpal and Lokayuktas Act, 2013</td>
          <td data-title="Link">
            2014
          </td>
          <td data-title="Status">1</td>
        </tr>
        <tr>
          <td data-title="ID">6</td>
          <td data-title="Name">National Institute of Mental Health and Neurosciences, Bangalore Act, 2012</td>
          <td data-title="Link">
            2012
          </td>
          <td data-title="Status">38</td>
        </tr>
        <tr>
          <td data-title="ID">7</td>
          <td data-title="Name">Sexual Harassment of Women at Workplace (Prevention, Prohibition and Redressal) Act, 2013</td>
          <td data-title="Link">
           2013
          </td>
          <td data-title="Status">14</td>
        </tr>
        <tr>
          <td data-title="ID">8</td>
          <td data-title="Name">Rajiv Gandhi National Institute of Youth Development Act, 2012</td>
          <td data-title="Link">
           2012
          </td>
          <td data-title="Status">35</td>
        </tr>
        <tr>
          <td data-title="ID">9</td>
          <td data-title="Name">Academy of Scientific and Innovative Research Act, 2011</td>
          <td data-title="Link">
            2012
          </td>
          <td data-title="Status">13</td>
        </tr>
        <tr>
          <td data-title="ID">10</td>
          <td data-title="Name">Factoring Regulation Act, 2011</td>
          <td data-title="Link">
            2012
          </td>
          <td data-title="Status">12</td>
        </tr>
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