<?php
/**
 * Template Name: Projects
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div id="projects" class="container">
    <!-- NAV Menu -->
    <?php
        include get_template_directory() . '/inc/nav-menu.php';
    ?>

    <div class="container">
        <div class="row mb-5">
            <div class="text-center m-auto">
            <h1 class="m-auto">Projects</h1>
            </div>
        </div>
        <div class="row">
            <?php
            /*
                TODO: Put Array into backoffice
                TODO: Button bellow?
                TODO: Add Links to each card
                TODO: Seperate cards through categories
            */
                $cardsArray = [
                    'BudgetApp' => [
                        'Url' => 'https://github.com/lurb3/budgetApp',
                        'Title' => 'BudgetApp',
                        'SubTitle' => 'Web App to control personal spendings',
                        'TimeSpent' => '2 weeks (WIP)',
                        'Image' => 'budget-app.jpg'
                    ],
                    'GustavoMonteiro' => [
                        'Url' => 'https://github.com/lurb3/Website',
                        'Title' => 'Gustavo Monteiro Website',
                        'SubTitle' => 'Personal website + blog',
                        'TimeSpent' => '2 weeks',
                        'Image' => 'gustavo-website.jpg'
                    ],
                    'Tendoledu' => [
                        'Url' => 'https://github.com/lurb3/tendoledu',
                        'Title' => 'Tendoledu',
                        'SubTitle' => 'Landing Page for School Business',
                        'TimeSpent' => '2 days',
                        'Image' => 'tenduledo-project.jpg'
                    ],
                    'AnaPeneda' => [
                        'Url' => 'https://github.com/lurb3/ana-website',
                        'Title' => 'Ana Peneda Website',
                        'SubTitle' => 'Website to promote personal brand',
                        'TimeSpent' => '1 week (WIP)',
                        'Image' => 'ana-website.jpg'
                    ],
                    'CounterApp' => [
                        'Url' => 'https://github.com/lurb3/CounterApp',
                        'Title' => 'Counter App',
                        'SubTitle' => 'Web App to count time spent coding',
                        'TimeSpent' => '1 week (WIP)',
                        'Image' => ''
                    ],
                    'Dashboard' => [
                        'Url' => '',
                        'Title' => 'Dashboard',
                        'SubTitle' => 'Dashboard template for public use',
                        'TimeSpent' => '0 days (WIP)',
                        'Image' => ''
                    ]
                ];

                foreach($cardsArray as $card) {
                    $templateURI = get_bloginfo('template_directory');
                    echo "
                        <div class='col-lg-12'>
                            <a href='" . $card['Url'] . "' target='_blank'>
                                <div class='projectsCard' style='background-image: url(" . $templateURI . "/images/" . $card['Image']. ");'>
                                    <div class='cardText'>
                                        <h2>" . $card['Title'] . "</h2>
                                        <span>" . $card['SubTitle'] . "</span>
                                        <span>Time Spent: " . $card['TimeSpent'] . "</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    ";
                }
            ?>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>
