<?php
    /**
     * This file contains PHP classes that can be used to interact with the Tropo WebAPI/
     *
     * @see       https://www.tropo.com/docs/webapi/
     *
     * @copyright 2010 Mark J. Headd (http://www.voiceingov.org)
     * @package   TropoPHP
     * @author    Mark Headd
     * @author    Adam Kalsey
     */
    namespace Tropo\Helper;

    /**
     * Event Helper class.
     *
     * @package TropoPHP_Support
     */
    class Event {

        public static $continue   = 'continue';
        public static $incomplete = 'incomplete';
        public static $error      = 'error';
        public static $hangup     = 'hangup';
        public static $join       = 'join';
        public static $leave      = 'leave';
        public static $ring       = 'ring';
    }
