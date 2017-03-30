<?php

class HelloWorldController extends BaseController {

    public static function index() {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        echo 'Tämä on etusivu!';
    }

    public static function sandbox() {
        View::make('helloworld.html');
    }

    public static function record_view(){
    View::make('suunnitelmat/record_view.html');
  }
  
  public static function record_edit(){
    View::make('suunnitelmat/record_edit.html');
  }
  
  public static function record_list(){
    View::make('suunnitelmat/record_list.html');
  }
  
  public static function record_find(){
    View::make('suunnitelmat/record_find.html');
  }
}
