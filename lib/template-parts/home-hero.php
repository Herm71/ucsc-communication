<?php

remove_action('genesis_header', 'genesis_do_header');
add_action ('genesis_header', __NAMESPACE__ . '\bb_hero_header');

function bb_hero_header () {
    echo "hello-world";
}
