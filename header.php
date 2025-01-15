<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">
                <a href="<?php echo home_url(); ?>" class="text-white no-underline">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
        </div>
    </header>