<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ResponsiveTestPerformed;

class BrowserController extends Controller
{
  /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
  public function __construct() {
    //
  }

  /**
   * Send invite for client.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function sendUrl(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new ResponsiveTestPerformed($request->websiteUrl));
    // \Mail::to(env('ADMIN_EMAIL'))->queue(new ResponsiveTestPerformed($request->websiteUrl));
    return \Response::json(true);
  }
}
