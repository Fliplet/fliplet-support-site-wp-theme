<?php
/**
 * Template part for displaying the search form.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fliplet
 * @subpackage Fliplet_Support
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="searchform" action="<?php echo get_home_url(); ?>">
  <div class="search-input-group">
    <input class="form-control" type="text" value="" name="s" placeholder="Search...">
    <button type="submit" value="Search">
      <i class="fl-icon-search"></i>
    </button>
  </div>
</form>