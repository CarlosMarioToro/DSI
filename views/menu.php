<?php
// if (!isset($_SESSION[' loggedin'])) {
//   echo "Usuario: " . $_SESSION['name'];
// }
// Leer el archivo JSON
$jsonFile = '../includes/sidebar.json';
$menuData = json_decode(file_get_contents($jsonFile), true);
// echo $menuData;
$tipoMenu = 'menu';

// Función para generar el menú
function generateMenu($menuItems)
{
    $html = '<ul class="menu">';

    foreach ($menuItems as $item) {
        $hasSubmenus = isset($item['submenu']) && is_array($item['submenu']);
        $icon = isset($item['icono']) ? '<img src="' . htmlspecialchars($item['icono']) . '" class="menu-icon">' : '';
        $html .= '<li>';
        if ($hasSubmenus) {
            $html .= '<a href="' . htmlspecialchars($item['url']) . '" class="menu-link ">' . $icon;
            $html .= '<span class= "titulo">' . htmlspecialchars($item['title']) . '</span>';
            $html .= '<i class="bi bi-chevron-right toggle"></i>'; // Botón para mostrar/ocultar submenús
            $html .= '</a>';
        } else {
            $html .= '<a href="' . htmlspecialchars($item['url']) . '" class="menu-link ">' . $icon;
            $html .= '<span class= "titulo">' . htmlspecialchars($item['title']) . '</span>';
            $html .= '</a>';
        }
        if ($hasSubmenus) {
            $html .= '<ul class="submenu">';
            $html .= generateMenu($item['submenu']); // Llamada recursiva
            $html .= '</ul>';
        }
        $html .= '</li>';
    }
    $html .= '</ul>';
    return $html;
}

// Generar el menú HTML
echo generateMenu($menuData, $tipoMenu);
