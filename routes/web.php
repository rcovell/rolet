<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* level 1 */
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/company/acceptable-use', function () {
    return view('acceptable-use');
})->name('company.acceptable-use');

Route::get('/company/privacy-policy', function () {
    return view('privacy-policy');
})->name('company.privacy-policy');

Route::get('/company/contact', function () {
    return view('contact');
})->name('company.contact');
Route::post('/company/contact', 'QuestionnaireController@submitContact')->name('company.contact.submit');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/support/customer-login', function () {
    return view('customer-login');
})->name('support.customer-login');

Route::get('/site-map', function () {
    return view('site-map');
})->name('site-map');

/* Hosting */
Route::get('/hosting', function () {
    return view('hosting/index');
})->name('hosting');

Route::get('/hosting/cpanel', function () {
    return view('hosting/cpanel');
})->name('hosting.cpanel');

Route::get('/hosting/custom', function () {
    return view('hosting/custom');
})->name('hosting.custom');

Route::get('/hosting/custom/questionnaire', 'QuestionnaireController@customHosting')->name('hosting.custom.questionnaire');
Route::post('/hosting/custom/questionnaire', 'QuestionnaireController@submitCustomHosting')->name('hosting.custom.questionnaire.submit');

Route::get('/hosting/cloud-servers', function () {
    return view('hosting/cloud-servers');
})->name('hosting.cloud-servers');

Route::get('/hosting/cloud-servers/questionnaire', 'QuestionnaireController@cloudServers')->name('hosting.cloud-servers.questionnaire');
Route::post('/hosting/cloud-servers/questionnaire', 'QuestionnaireController@submitCloudServers')->name('hosting.cloud-servers.questionnaire.submit');

Route::get('/hosting/colocated', function () {
    return view('hosting/colocated');
})->name('hosting.colocated');

Route::get('/hosting/managed', function () {
    return view('hosting/managed');
})->name('hosting.managed');

Route::get('/hosting/managed/questionnaire', 'QuestionnaireController@managedHosting')->name('hosting.managed.questionnaire');
Route::post('/hosting/managed/questionnaire', 'QuestionnaireController@submitManagedHosting')->name('hosting.managed.questionnaire.submit');

Route::get('/hosting/migration', function () {
    return view('hosting/migration');
})->name('hosting.migration');

Route::get('/hosting/migration/questionnaire', 'QuestionnaireController@migration')->name('hosting.migration.questionnaire');
Route::post('/hosting/migration/questionnaire', 'QuestionnaireController@submitMigration')->name('hosting.migration.questionnaire.submit');

/* Email */
Route::get('/email', function () {
    return view('email/index');
})->name('email');

Route::get('/email/cloud', function () {
    return view('email/cloud');
})->name('email.cloud');

Route::get('/email/cloud/questionnaire', 'QuestionnaireController@cloudEmail')->name('email.cloud.questionnaire');
Route::post('/email/cloud/questionnaire', 'QuestionnaireController@submitCloudEmail')->name('email.cloud.questionnaire.submit');

Route::get('/email/hybrid', function () {
    return view('email/hybrid');
})->name('email.hybrid');

Route::get('/email/continuity', function () {
    return view('email/continuity');
})->name('email.continuity');

Route::get('/email/transactional', function () {
    return view('email/transactional');
})->name('email.transactional');

/* Websites and Apps */
Route::get('/websites-and-apps', function () {
    return view('websites-and-apps/index');
})->name('websites-and-apps');

Route::get('/websites-and-apps/websites', function () {
    return view('websites-and-apps/websites');
})->name('websites-and-apps.websites');

Route::get('/websites-and-apps/websites/questionnaire', 'QuestionnaireController@websites')->name('websites-and-apps.websites.questionnaire');
Route::post('/websites-and-apps/websites/questionnaire', 'QuestionnaireController@submitWebsite')->name('websites-and-apps.websites.questionnaire.submit');

Route::get('/websites-and-apps/web-applications', function () {
    return view('websites-and-apps/web-applications');
})->name('websites-and-apps.web-applications');

Route::get('/websites-and-apps/web-applications/questionnaire', 'QuestionnaireController@webApplications')->name('websites-and-apps.web-applications.questionnaire');
Route::post('/websites-and-apps/web-applications/questionnaire', 'QuestionnaireController@submitWebApplication')->name('websites-and-apps.web-applications.questionnaire.submit');

Route::get('/websites-and-apps/managed', function () {
    return view('websites-and-apps/managed');
})->name('websites-and-apps.managed');

Route::get('/websites-and-apps/managed/questionnaire', 'QuestionnaireController@managedWebsitesAndApps')->name('websites-and-apps.managed.questionnaire');
Route::post('/websites-and-apps/managed/questionnaire', 'QuestionnaireController@submitManagedWebsitesAndApps')->name('websites-and-apps.managed.questionnaire.submit');

Route::get('/websites-and-apps/hacked', function () {
    return view('websites-and-apps/hacked');
})->name('websites-and-apps.hacked');

Route::get('/websites-and-apps/hacked/questionnaire', 'QuestionnaireController@hacked')->name('websites-and-apps.hacked.questionnaire');
Route::post('/websites-and-apps/hacked/questionnaire', 'QuestionnaireController@submitHacked')->name('websites-and-apps.hacked.questionnaire.submit');

Route::get('/websites-and-apps/websites/mobile-responsive', function () {
    return view('websites-and-apps/mobile-responsive');
})->name('websites-and-apps.mobile-responsive-test');

Route::post('/websites-and-apps/mobile-responsive', 'BrowserController@sendUrl')->name('send-mobile-test');

/* Redirects */
//Keep this a 302 until it gets put back in
Route::get('/site-map', function () {
  return redirect('/', 302);
});
//Keep this a 302 until it gets put back in
Route::get('/faq', function () {
  return redirect('/', 302);
});

Route::get('/hosting-solutions', function () {
  return redirect('hosting', 302);
});
Route::get('/web-hosting/cpanel-website-hosting', function () {
  return redirect('hosting/cpanel', 302);
});
Route::get('/web-hosting/cpanel-website-hosting/{subpage}', function () {
  return redirect('hosting/cpanel', 302);
});
Route::get('/acceptable-use', function () {
  return redirect('company/acceptable-use', 301);
});
Route::get('/company-information', function () {
  return redirect('company', 301);
});
Route::get('/contact-us', function () {
  return redirect('company/contact', 302);
});
Route::get('/custom-website-hosting-price', function () {
  return redirect('hosting', 302);
});
Route::get('/customer-login', function () {
  return redirect('support/customer-login', 302);
});
Route::get('/dedicated-servers', function () {
  return redirect('hosting', 302);
});
Route::get('/dedicated-servers/{subpage}', function () {
  return redirect('hosting', 302);
});
Route::get('/email-hosting', function () {
  return redirect('email', 302);
});
Route::get('/email-hosting/{subpage}', function () {
  return redirect('email', 302);
});
Route::get('/email-services', function () {
  return redirect('email', 302);
});
Route::get('/email-services/backup-mx', function () {
  return redirect('email/continuity', 302);
});
Route::get('/email-services/backup-mx/{subpage}', function () {
  return redirect('email/continuity', 302);
});
Route::get('/email-services/{subpage}', function () {
  return redirect('email', 302);
});
Route::get('/email-services/advanced-email-security/{subpage}', function () {
  return redirect('email', 302);
});
Route::get('/get-support', function () {
  return redirect('support', 302);
});
Route::get('/managed-hosting', function () {
  return redirect('hosting/managed', 302);
});
Route::get('/managed-hosting/dedicated-servers/{subpage}', function () {
  return redirect('hosting/managed', 302);
});
Route::get('/microsoft-exchange-hosting', function () {
  return redirect('email/cloud', 302);
});
Route::get('/microsoft-exchange-hosting/{subpage}', function () {
  return redirect('email/cloud', 302);
});
Route::get('/privacy', function () {
  return redirect('company/privacy-policy', 302);
});
Route::get('/virtual-private-servers', function () {
  return redirect('hosting/cloud-servers', 302);
});
Route::get('/virtual-private-servers/{subpage}', function () {
  return redirect('hosting/cloud-servers', 302);
});
Route::get('/web-design-development', function () {
  return redirect('websites-and-apps/websites', 302);
});
Route::get('/web-design-development/{subpage}', function () {
  return redirect('websites-and-apps/websites', 302);
});
Route::get('/web-design-development/portfolio/{subpage}', function () {
  return redirect('websites-and-apps/websites', 302);
});
Route::get('/web-hosting', function () {
  return redirect('hosting', 302);
});
Route::get('/web-hosting/cpanel-web-hosting', function () {
  return redirect('hosting/cpanel', 302);
});
Route::get('/web-hosting/cpanel-web-hosting/{subpage}', function () {
  return redirect('hosting/cpanel', 302);
});
Route::get('/web-hosting/custom-web-hosting', function () {
  return redirect('hosting/custom', 302);
});
Route::get('/web-hosting/custom-web-hosting/{subpage}', function () {
  return redirect('hosting/custom', 302);
});
Route::get('/why-rolet', function () {
  return redirect('/', 302);
});

// Route::get('/web-hosting/cpanel-website-hosting/*', function (Request $request) {
//   $uri = str_replace('partner/', 'business/', $request->path());
//
//   return redirect($uri, 301);
// });

/* Development */
// Route::get('/websites-and-apps/websites/mobile-responsive', 'BrowserController@test')->name('mobile-responsive-test');
Route::get('/style-guide', function () {
    return view('style-guide');
})->name('style-guide');

Route::get('/create-site-map', 'SitemapController@create');
