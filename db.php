<?php
$conn = pg_connect("host=ep-sweet-surf-aef9wth9-pooler.c-2.us-east-2.aws.neon.tech
                    dbname=neondb
                    user=neondb_owner
                    password=npg_l42MSAHcXQrT
                    sslmode=require
                    channel_binding=require");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}
?>
