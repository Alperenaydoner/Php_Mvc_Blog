<?php
App::getAction(link:'/',path:'/',auth:false);
App::getAction(link:'/index',path:'/blog/index',auth:false);
App::getAction(link:'/anasayfa',path:'/blog/anasayfa',auth:true);
App::postAction(link:'/indir',path:'/blog/indir',auth:true);
App::postAction(link:'/giris',path:'/blog/giris',auth:true);
App::postAction(link:'/kekle',path:'/blog/kekle',auth:true);
App::getAction(link:'/konuekle',path:'/blog/konuekle',auth:true);