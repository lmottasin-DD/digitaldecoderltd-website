

<?php

use App\Models\Footer;

    function load_footer()
    {
        $footer_details = Footer::find(1);

        return $footer_details;
    }
