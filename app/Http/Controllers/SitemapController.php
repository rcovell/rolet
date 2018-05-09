<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class SitemapController extends Controller
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
  public function create(Request $request) {
    // CHANGE_FREQUENCY_YEARLY
    // ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
    SitemapGenerator::create(env('APP_URL'))
      ->writeToFile(public_path('sitemap.xml'));
    return \Response::json(true);
  }
}
