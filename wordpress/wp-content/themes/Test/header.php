<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header>
        <?php if (is_front_page() || is_home()): ?>
             <h1><?php bloginfo('name'); ?></h1>
        <?php else: ?>
            <p><?php bloginfo('name'); ?></p>
        <?php endif; ?>
        <p><?php bloginfo('description'); ?></p>
        <?php get_search_form(); ?>
    </header>