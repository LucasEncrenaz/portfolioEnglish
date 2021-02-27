<?php

$rows = get_field('menu', 'option');
if( $rows ) { ?>
    <div class="contentMenu">
    <i class="fas fa-bars"></i>
    <i class="fas fa-times"></i>
        <?php echo '<ul class="menu">';
        foreach( $rows as $row ) {
            echo '<li class="item">'; ?>
                <a class="link" href="#<?php echo $row['lien']; ?>"><?php echo $row['texte']; ?></a>
            <?php echo '</li>';
        }
        echo '</ul>'; ?>
        <?php echo '<ul class="menuMobile">';
        foreach( $rows as $row ) {
            echo '<li class="itemMobile">'; ?>
                <i class="<?php echo $row['icon']; ?>"></i>
                <a class="linkMobile" href="#<?php echo $row['lien']; ?>"><?php echo $row['texte']; ?></a>
            <?php echo '</li>';
        }
        echo '</ul>'; ?>
    </div>
<?php } ?>