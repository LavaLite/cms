<?php

return array(

    'table'   => 'visitor_registry',

    'ignored' => array(
            //'172.16.10.0/24',
            //'192.168.10.0/24',
            //'10.0.3.1',
            //'10.0.0.0/16',
            //'2001:14b8:100:934b::3:1',
            //'2001:14b8:100:934b::/64',
          //  '*.example.com',
          //  'localhost'
    ),

    'maxmind_db_path' => storage_path().'/geo/GeoLite2-City.mmdb',






  );