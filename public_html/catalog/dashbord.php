<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');


  require(DIR_WS_LANGUAGES . $language . '/' . FILENAME_DASHBORD);

  $breadcrumb->add(NAVBAR_TITLE, tep_href_link(FILENAME_DASHBORD, '', 'SSL'));

  require(DIR_WS_INCLUDES . 'template_top.php');
?>

<h1><?php echo HEADING_TITLE; ?></h1>

<?php
  if ($messageStack->size('account') > 0) {
    echo $messageStack->output('account');
  }
?>

<div class="contentContainer">
  <h2><?php echo AVAILABLE_PLUGINS; ?></h2>
			
  <div class="ui-widget infoBoxContainer">
	<div class="ui-widget-header ui-corner-top infoBoxHeading">	  
		<table class="productListingHeader" width="100%">
		<tbody>
		<tr>
			<td style = 'width:100px;'>Plugin</td>
			<td style = 'text-align: center;'>Description</td>
			<td style = 'width:100px;'>&nbsp</td>
		</tr>
		</tbody>
		</table>			
	</div>
  </div>
<div class="ui-widget-content ui-corner-bottom productListTable">
	<table class="productListingData" width="100%">
		<tbody>
		<?php tep_plugins_list(); ?>
		</tbody>
	</table>

</div>

<?php
if (tep_session_is_registered('customer_id')) {
?>

  <h2><?php echo INSTALLED_PLUGIN; ?></h2>

  <div class="ui-widget infoBoxContainer">
	<div class="ui-widget-header ui-corner-top infoBoxHeading">	  
		<table class="productListingHeader" width="100%">
		<tbody>
		<tr>
			<td style = 'width:100px;'>Plugin</td>
			<td style = 'text-align: center;'>Description</td>
			<td style = 'width:100px;'>&nbsp</td>
		</tr>
		</tbody>
		</table>			
	</div>
  </div>
<div class="ui-widget-content ui-corner-bottom productListTable">
	<table class="productListingData" width="100%">
		<tbody>
		<?php tep_installed_plugins_list(); ?>
		</tbody>
	</table>

</div>

  <h2><?php echo INSTALL_PLUGIN; ?></h2>

  <div class="contentText">
    <form action="install_plugin.php" method="post" enctype="multipart/form-data">
  <input type="file" name="file"/>
  <input type="submit">
  </form>
</br>
<?php
	if(isset($_SESSION['plugin_error'])){
		echo $_SESSION['plugin_error'];
		tep_session_unregister('plugin_error');
	}

?>
  </div>

<?php
}
?>

</div>



<?php
  require(DIR_WS_INCLUDES . 'template_bottom.php');
  require(DIR_WS_INCLUDES . 'application_bottom.php');
?>









