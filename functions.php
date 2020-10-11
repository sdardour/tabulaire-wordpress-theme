<?php

if (function_exists("add_theme_support")) {
	add_theme_support("post-thumbnails");
}

function SDARDOURCOM_TABULAIRE_THEME_DEMO_WEBSITE()
{
	return true;
}

function SDARDOURCOM_TABULAIRE_THEME_CATEGORIES_LIST()
{
	$cat = array();
	foreach (get_categories(array()) as $itm) {
		if ($cat->category_parent == 0) {
			array_push($cat, (object) ["name" => $itm->name, "link" => get_category_link($itm->term_id)]);
		}
	}
	$htm = ""; // No categories found
	if (sizeof($cat) > 0) {
		$htm = "";
		for ($k = 0; $k < sizeof($cat); $k += 1) {
			$htm .= "<a class=\"dropdown-item\" href=\"" . $cat[$k]->link . "\">" . $cat[$k]->name . "</a>";
		}
	}
	return $htm;
}

function SDARDOURCOM_TABULAIRE_THEME_ENQUEUE_SCRIPTS() {
    wp_enqueue_script("jquery");
    wp_enqueue_script(
        "quick-filter",
        get_template_directory_uri() . "/quick-filter.js",
        array("jquery")
    );
}

add_action ("wp_enqueue_scripts", "SDARDOURCOM_TABULAIRE_THEME_ENQUEUE_SCRIPTS");
