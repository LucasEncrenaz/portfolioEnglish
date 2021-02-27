<?php

$rows = get_field('menu', 'option');
if( $rows ) {
    echo '<ul class="menu">';
    foreach( $rows as $row ) {
        echo '<li class="item">'; ?>
            <a class="link" href="#<?php echo $row['lien']; ?>"><?php echo $row['texte']; ?></a>
        <?php echo '</li>';
    }
    echo '</ul>';
}