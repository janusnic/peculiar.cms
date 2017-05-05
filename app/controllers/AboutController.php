<?php

class AboutController
{

  function __construct() {
    // Конструктор класса AboutController

    view('about/index', ['title'=>'About PAGE']);
  }


}

