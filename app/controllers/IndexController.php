<?php

class IndexController
{

  function __construct() {
    // Конструктор класса IndexController

    view('index/index', ['title'=>'HOME PAGE']);
  }


}

