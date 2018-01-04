<?php
// only for visual purpose
function remove_unnecessary_menu(){
  remove_menu_page("themes.php");
}
add_action("admin_menu", "remove_unnecessary_menu");