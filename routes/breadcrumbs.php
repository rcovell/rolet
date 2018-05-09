<?php
// First level
Breadcrumbs::register('home', function ($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('company', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Company', route('company'));
});

Breadcrumbs::register('acceptable-use', function ($breadcrumbs) {
  $breadcrumbs->parent('company');
  $breadcrumbs->push('Acceptable Use', route('company.acceptable-use'));
});

Breadcrumbs::register('privacy-policy', function ($breadcrumbs) {
  $breadcrumbs->parent('company');
  $breadcrumbs->push('Privacy Policy', route('company.privacy-policy'));
});

Breadcrumbs::register('contact', function ($breadcrumbs) {
  $breadcrumbs->parent('company');
  $breadcrumbs->push('Contact', route('company.contact'));
});

Breadcrumbs::register('support', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Support', route('support'));
});

Breadcrumbs::register('support.customer-login', function ($breadcrumbs) {
  $breadcrumbs->parent('support');
  $breadcrumbs->push('Customer Login', route('support.customer-login'));
});

Breadcrumbs::register('site-map', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Site Map', route('site-map'));
});

Breadcrumbs::register('style-guide', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Style Guide', route('style-guide'));
});

// Second level
// Hosting
Breadcrumbs::register('hosting', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Hosting', route('hosting'));
});

Breadcrumbs::register('hosting.cpanel', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('cPanel', route('hosting.cpanel'));
});

Breadcrumbs::register('hosting.custom', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('Custom', route('hosting.custom'));
});

Breadcrumbs::register('hosting.custom.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting.custom');
  $breadcrumbs->push('Questionnaire', route('hosting.custom.questionnaire'));
});

Breadcrumbs::register('hosting.cloud-servers', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('Cloud Servers', route('hosting.cloud-servers'));
});

Breadcrumbs::register('hosting.cloud-servers.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting.cloud-servers');
  $breadcrumbs->push('Questionnaire', route('hosting.cloud-servers.questionnaire'));
});

Breadcrumbs::register('hosting.colocated', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('Colocated', route('hosting.colocated'));
});

Breadcrumbs::register('hosting.managed', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('Managed', route('hosting.managed'));
});

Breadcrumbs::register('hosting.managed.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting.managed');
  $breadcrumbs->push('Questionnaire', route('hosting.managed.questionnaire'));
});

Breadcrumbs::register('hosting.migration', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting');
  $breadcrumbs->push('Migration', route('hosting.migration'));
});

Breadcrumbs::register('hosting.migration.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('hosting.migration');
  $breadcrumbs->push('Questionnaire', route('hosting.migration.questionnaire'));
});

// Websites and Apps
Breadcrumbs::register('websites-and-apps', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Websites and Apps', route('websites-and-apps'));
});

Breadcrumbs::register('websites-and-apps.websites', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps');
  $breadcrumbs->push('Websites', route('websites-and-apps.websites'));
});

Breadcrumbs::register('websites-and-apps.websites.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps.websites');
  $breadcrumbs->push('Questionnaire', route('websites-and-apps.websites.questionnaire'));
});

Breadcrumbs::register('websites-and-apps.web-applications', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps');
  $breadcrumbs->push('Web Applications', route('websites-and-apps.web-applications'));
});

Breadcrumbs::register('websites-and-apps.web-applications.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps.web-applications');
  $breadcrumbs->push('Questionnaire', route('websites-and-apps.web-applications.questionnaire'));
});

Breadcrumbs::register('websites-and-apps.managed', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps');
  $breadcrumbs->push('Managed', route('websites-and-apps.managed'));
});

Breadcrumbs::register('websites-and-apps.managed.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps.managed');
  $breadcrumbs->push('Questionnaire', route('websites-and-apps.managed.questionnaire'));
});

Breadcrumbs::register('websites-and-apps.hacked', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps');
  $breadcrumbs->push('Hacked', route('websites-and-apps.hacked'));
});

Breadcrumbs::register('websites-and-apps.hacked.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps.hacked');
  $breadcrumbs->push('Questionnaire', route('websites-and-apps.hacked.questionnaire'));
});

Breadcrumbs::register('websites-and-apps.mobile-responsive-test', function ($breadcrumbs) {
  $breadcrumbs->parent('websites-and-apps.websites');
  $breadcrumbs->push('Mobile Responsive', route('websites-and-apps.mobile-responsive-test'));
});

// Email
Breadcrumbs::register('email', function ($breadcrumbs) {
  $breadcrumbs->parent('home');
  $breadcrumbs->push('Email', route('email'));
});

Breadcrumbs::register('email.cloud', function ($breadcrumbs) {
  $breadcrumbs->parent('email');
  $breadcrumbs->push('Cloud', route('email.cloud'));
});

Breadcrumbs::register('email.cloud.questionnaire', function ($breadcrumbs) {
  $breadcrumbs->parent('email.cloud');
  $breadcrumbs->push('Questionnaire', route('email.cloud.questionnaire'));
});

Breadcrumbs::register('email.hybrid', function ($breadcrumbs) {
  $breadcrumbs->parent('email');
  $breadcrumbs->push('Hybrid', route('email.hybrid'));
});

Breadcrumbs::register('email.continuity', function ($breadcrumbs) {
  $breadcrumbs->parent('email');
  $breadcrumbs->push('Continuity', route('email.continuity'));
});

Breadcrumbs::register('email.transactional', function ($breadcrumbs) {
  $breadcrumbs->parent('email');
  $breadcrumbs->push('Transactional', route('email.transactional'));
});

// Breadcrumbs::register('home', function ($breadcrumbs, $category) {
//   if ($category->parent) {
//     $breadcrumbs->parent('home', $category->parent);
//   } else {
//     $breadcrumbs->parent('home');
//   }
//
//   $breadcrumbs->push($category->title, route('home', $category->slug));
// });

// Home > About
// Breadcrumbs::register('hosting', function ($breadcrumbs) {
//     $breadcrumbs->parent('hosting');
//     $breadcrumbs->push('Hosting', route('hosting'));
// });

// Home > Blog
// Breadcrumbs::register('blog', function ($breadcrumbs) {
//     $breadcrumbs->parent('home');
//     $breadcrumbs->push('Blog', route('blog'));
// });

// // Home > Blog > [Category]
// Breadcrumbs::register('category', function ($breadcrumbs, $category) {
//     $breadcrumbs->parent('blog');
//     $breadcrumbs->push($category->title, route('category', $category->id));
// });
//
// // Home > Blog > [Category] > [Post]
// Breadcrumbs::register('post', function ($breadcrumbs, $post) {
//     $breadcrumbs->parent('category', $post->category);
//     $breadcrumbs->push($post->title, route('post', $post));
// });
