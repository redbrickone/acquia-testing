<?php
/**
 * Created by PhpStorm.
 * User: chriswright
 * Date: 1/28/17
 * Time: 11:44 AM
 */
?>

<div id="wrapper">
    <?php if ($main_menu): ?>
        <div id="header">
            <a href="<?php print $front_page; ?>">
                <img src="/<?php print $directory; ?>/images/logo.png" alt="<?php print $site_name; ?>" height="80" width="150" />
            </a>
            <?php if ($main_menu): ?>
                <?php print theme('links', $main_menu); ?>
            <?php endif; ?>

        </div>
    <?php endif; ?>

    <div id="wrapper">

        <div id="content">
            <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php print render($messages); ?>
            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

            <?php print render($page['content']); ?>
        </div>

        <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first">
                <?php print render($page['sidebar_first']); ?>
            </div>
        <?php endif; ?>

    </div>


    <div id="footer">
        <?php if ($page['footer']): ?>
            <?php print render($page['footer']); ?>
        <?php endif; ?>
    </div>
</div>