<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function register_custom_menu()
{
    register_nav_menu('primary', 'Menu Rencontre');
}
add_action('init', 'register_custom_menu');
function add_menu_logo()
{
?>
    <div class="menu-logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/logo.png'; ?>" alt="Logo" />
        </a>
    </div>
<?php
}

add_action('wp_nav_menu', 'add_menu_logo');

/* Hook admin */

function display_admin($items, $args)
{
    // Vérifie si l'utilisateur actuel a la capacité de gérer les options et si le menu est le menu principal ('main_menu')
    if (current_user_can('manage_options') && $args->theme_location == 'main_menu') {
        // Crée un nouvel élément de menu pour le lien vers l'administration
        $admin_item = '<li id="menu-admin" class=""><a href="http://localhost/Planty/wp-admin/" class="menu-link"><span class="text-wrap">Admin</span></a></li>';

        // Divise la chaîne des éléments du menu en un tableau
        $menu_items = preg_split('/<\ /li>/', $items);

        // Insère l'élément 'Admin' à la position 1 du tableau des éléments du menu
        array_splice($menu_items, 1, 0, array($admin_item));

        // Recrée la chaîne des éléments du menu en utilisant le tableau modifié
        $items = implode('</li>', $menu_items) . '</li>';
    }

    // Renvoie les éléments du menu modifiés ou non modifiés
    return $items;
}

// Ajoute le filtre pour exécuter la fonction 'display_admin' lors de la génération du menu
add_filter('wp_nav_menu_items', 'display_admin', 10, 2);

?>