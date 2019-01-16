<?php
    namespace App\Providers\Constants;

    /**
     * Created by PhpStorm.
     * User: tnchalise
     * Date: 23/12/15
     * Time: 12:55 PM
     */

    use \App\Providers\Constants\Base\Constants;

    class CommonConstants extends Constants
    {

        /**
         * User Status
         */
        const STATUS_ONLINE  = 1;

        const STATUS_OFFLINE = 0;

        /*
         * pagination
         */

        const PAGINATION_COUNT         = 10;

        const PAGINATION_COUNT_Gallery = 40;




    }
