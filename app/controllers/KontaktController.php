<?php
class KontaktController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  |	Route::get('/', 'HomeController@showWelcome');
  |
  */

  protected $layout = "master";

  public function sendMail()
  {
    Mail::send('emails.welcome', $data, function($message)
    {
      $message->from('us@example.com', 'Laravel');

      $message->to('foo@example.com')->cc('bar@example.com');
    });
  }

}