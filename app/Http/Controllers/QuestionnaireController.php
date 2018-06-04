<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WebsiteQuestionnaire;
use App\Mail\WebApplicationQuestionnaire;
use App\Mail\HackedQuestionnaire;
use App\Mail\ContactQuestionnaire;
use App\Mail\ManagedHostingQuestionnaire;
use App\Mail\CloudServersQuestionnaire;
use App\Mail\CloudEmailQuestionnaire;
use App\Mail\CustomHostingQuestionnaire;
use App\Mail\MigrationQuestionnaire;
use App\Mail\ManagedWebsitesAndAppsQuestionnaire;
// use App\Http\Requests\QuestionnaireSubmission;

class QuestionnaireController extends Controller
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
   * @return \Illuminate\Http\Response
   */
  public function websites() {
    $timeframes = $this->timeframes();
    $content = $this->content();
    $budget = $this->budget();
    return view('questionnaires.websites', compact('timeframes', 'content', 'budget'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function webApplications() {
    $timeframes = $this->timeframes();
    $knowTechnology = $this->knowTechnology();
    $technology = $this->technology();
    $budget = $this->budget();
    return view('questionnaires.web-applications', compact('timeframes', 'knowTechnology', 'technology', 'budget'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function hacked() {
    $time = $this->time();
    $backups = $this->backups();
    $effects = $this->effects();
    $environment = $this->environment();
    $nutsAndBolts = $this->nutsAndBolts();
    $otherHacked = $this->otherHacked();
    return view('questionnaires.hacked', compact('time', 'backups', 'effects', 'environment', 'nutsAndBolts', 'otherHacked'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function managedHosting() {
    $timeframes = $this->timeframes();
    $managedHostingNeeds = $this->managedHostingSolutions();
    return view('questionnaires.managed-hosting', compact('timeframes', 'managedHostingNeeds'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function managedWebsitesAndApps() {
    $timeframes = $this->timeframes();
    $managedWebsitesAndAppsNeeds = $this->managedWebsitesAndAppsSolutions();
    return view('questionnaires.managed-websites-and-apps', compact('timeframes', 'managedWebsitesAndAppsNeeds'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function cloudServers() {
    $knowCloudServerTechology = $this->knowCloudServerTechology();
    $timeframes = $this->timeframes();
    $operatingSystems = $this->operatingSystems();
    $hyperVisors = $this->cloudServerHyperVisors();
    $proxmox = $this->proxmox();
    $memory = $this->memory();
    $storage = $this->storage();
    return view('questionnaires.cloud-servers', compact('knowCloudServerTechology', 'timeframes', 'operatingSystems', 'hyperVisors', 'proxmox', 'memory', 'storage'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function cloudEmail() {
    $timeframes = $this->timeframes();
    $mailboxSizes = $this->mailboxSizes();
    return view('questionnaires.cloud-email', compact('timeframes', 'mailboxSizes'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function customHosting() {
    $timeframes = $this->timeframes();
    $customHostingFeatures = $this->customHostingFeatures();
    return view('questionnaires.custom-hosting', compact('timeframes', 'customHostingFeatures'));
  }

  /**
   * @return \Illuminate\Http\Response
   */
  public function migration() {
    $environmentExclude = [];
    $environmentExclude['log'] = true;

    $timeframes = $this->timeframes();
    $environment = $this->environment($environmentExclude);
    $nutsAndBolts = $this->nutsAndBoltsForMigration();

    return view('questionnaires.migration', compact('timeframes', 'environment', 'nutsAndBolts'));
  }

  /**
   * Send website questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitWebsite(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new WebsiteQuestionnaire($request));
    // \Mail::to(env('ADMIN_EMAIL'))->queue(new ResponsiveTestPerformed($request->websiteUrl));
    return \Redirect::route('websites-and-apps.websites')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitWebApplication(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new WebApplicationQuestionnaire($request));
    return \Redirect::route('websites-and-apps.web-applications')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitHacked(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new HackedQuestionnaire($request));
    return \Redirect::route('websites-and-apps.hacked')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitContact(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new ContactQuestionnaire($request));
    return \Redirect::route('company.contact')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitManagedHosting(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new ManagedHostingQuestionnaire($request));
    return \Redirect::route('hosting.managed')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitManagedWebsitesAndApps(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new ManagedWebsitesAndAppsQuestionnaire($request));
    return \Redirect::route('websites-and-apps.managed')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitCloudServers(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new CloudServersQuestionnaire($request));
    // \Mail::to(env('ADMIN_EMAIL'))->queue(new CloudServersQuestionnaire($request));
    return \Redirect::route('hosting.cloud-servers')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitCloudEmail(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new CloudEmailQuestionnaire($request));
    // \Mail::to(env('ADMIN_EMAIL'))->queue(new CloudEmailQuestionnaire($request));
    return \Redirect::route('email.cloud')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitCustomHosting(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new CustomHostingQuestionnaire($request));
    return \Redirect::route('hosting.custom')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  /**
   * Send application questionnaire.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function submitMigration(Request $request) {
    \Mail::to(env('ADMIN_EMAIL'))->send(new MigrationQuestionnaire($request));
    return \Redirect::route('hosting.migration')
      ->with('questionnaireMessage', 'Your information has been received. A representative will be contacting you shortly. Thank you!');
  }

  private function getDescription($haystack, $needle) {
    foreach ($haystack as $key => $value) {
      if (!is_array($value) && $key == $needle) {
        return $value;
      }
    }
    return 'Not Found';
  }

  private function timeframes() {
    $options = [];
    $options['now'] = 'Immediately';
    $options['one-to-two'] = '1 - 2 Months ';
    $options['two-to-three'] = '2 - 3 Months';
    $options['three-to-four'] = '3 - 4 Months';
    $options['four-to-six'] = '4 - 6 Months';
    $options['six-plus'] = '6+ Months';
    return $options;
  }

  public function getTimeframeDescription($key) {
    return $this->getDescription($this->timeframes(), $key);
  }

  private function content() {
    $options = [];
    $options['yes'] = 'Yes! We\'ve done our homework.';
    $options['in-progress'] = 'Kind of. Been working on it.';
    $options['nope'] = 'Nope. Blank slate.';
    return $options;
  }

  public function getContentDescription($key) {
    return $this->getDescription($this->content(), $key);
  }

  private function budget() {
    $options = [];
    $options['2500-5000'] = '$2500 - $5000';
    $options['5000-10000'] = '$5000 - $10000';
    $options['10000-15000'] = '$10000 - $15000';
    $options['15000-20000'] = '$15000 - $20000';
    $options['20000-25000'] = '$20000 - $25000';
    $options['25000'] = '$25000';
    return $options;
  }

  public function getBudgetDescription($key) {
    return $this->getDescription($this->budget(), $key);
  }

  private function noPreference() {
    $options = [];
    $options['no-preference'] = 'No Preference';
    return $options;
  }

  private function yesNo() {
    $options = [];
    $options['yes'] = 'Yes';
    $options['no'] = 'No';
    return $options;
  }

  public function getYesNoDescription($key) {
    return $this->getDescription($this->yesNo(), $key);
  }

  private function proxmox() {
    return $this->yesNo();
  }

  public function getProxmoxDescription($key) {
    return $this->getYesNoDescription($key);
  }

  private function knowTechnology() {
    $options = [];
    $options['know'] = 'Yes, we know';
    $options['dont-know'] = 'No idea, that is what your for';
    return $options;
  }

  public function getKnowTechnologyDescription($key) {
    return $this->getDescription($this->knowTechnology(), $key);
  }

  private function time() {
    $options = [];
    $options['have-time'] = 'Have Time';
    $options['no-time'] = 'No Time';
    return $options;
  }

  public function getTimeDescription($key) {
    return $this->getDescription($this->time(), $key);
  }

  private function knowCloudServerTechology() {
    $options = [];
    $options['know'] = 'Yes, we know';
    $options['not-sure'] = 'Not sure, contact us';
    return $options;
  }

  public function getKnowCloudServerTechnologyDescription($key) {
    return $this->getDescription($this->knowCloudServerTechology(), $key);
  }

  private function backups() {
    return $this->yesNo();
  }

  public function getBackupsDescription($key) {
    return $this->getYesNoDescription($key);
  }

  private function effects() {
    $options = [];
    $options['down'] = 'Website is down';
    $options['defaced'] = 'Website is defaced';
    $options['sending-spam'] = 'Website is sending out spam';
    $options['attacking'] = 'Website is attacking another website';
    $options['cannot-login-cms'] = 'Cannot login to CMS';
    $options['cannot-login-server'] = 'Cannot login to FTP/SSH';
    $options['compromised-accounts'] = 'Compromised user accounts';
    $options['other'] = 'Other (not sure but something is wrong)';
    return $options;
  }

  public function getEffectsDescription($key) {
    return $this->getDescription($this->effects(), $key);
  }

  private function environment($exclude = []) {
    $options = [];
    $options['shared'] = 'Shared Hosting (ex. cPanel, plesk, other)';
    $options['vps'] = 'Virtual Private Server';
    $options['colocated'] = 'Colocated Server';
    $options['cloud'] = 'Cloud Hosting (AWS/Azure/etc.)';
    $options['dedicated'] = 'Dedicated Server';
    $options['linux'] = 'Linux';
    $options['windows'] = 'Windows';
    $options['ftp'] = 'We have FTP access';
    $options['ssh'] = 'We have SSH access';
    $options['rdp'] = 'We have RDP access';
    $options['root'] = 'We have root/administrator access';
    if (empty($exclude['log'])) {
      $options['log'] = 'We have access to log files';
    }
    $options['notsure'] = 'Not sure, Yes to all, No to all';
    return $options;
  }

  public function getEnvironmentDescription($key) {
    return $this->getDescription($this->environment(), $key);
  }

  private function nutsAndBolts($exclude = []) {
    $options = [];
    $options[]['category'] = 'Content Management (CMS)';
    $options = array_merge($options, $this->cms());
    $options['othercms'] = 'Other CMS';

    $options[]['category'] = 'Database (DB)';
    $options = array_merge($options, $this->databases());
    $options['other'] = 'Other DB';

    $options[]['category'] = 'Operating System (OS)';
    $options = array_merge($options, $this->operatingSystems());
    $options['os2'] = 'OS2 (Please don\'t check this)';
    $options['otheros'] = 'Other OS';
    $options[]['category'] = 'Other';

    $options['custom'] = 'Custom Website';
    $options['customapp'] = 'Custom Application';
    if (empty($exclude['just-help'])) {
      $options['just-help'] = 'Just Help';
    }
    return $options;
  }

  public function getNutsAndBoltsDescription($key) {
    return $this->getDescription($this->nutsAndBolts(), $key);
  }

  private function nutsAndBoltsForMigration($exclude = []) {
    $nutsAndBoltsExclude = [];
    $nutsAndBoltsExclude['just-help'] = true;
    $options = $this->nutsAndBolts($nutsAndBoltsExclude);
    $options[]['category'] = 'Server Side Languages';
    $options = array_merge($options, $this->serverSideLanguages());
    $options['otherlanguage'] = 'Other (*)';
    return $options;
  }

  public function getNutsAndBoltsForMigrationDescription($key) {
    return $this->getDescription($this->nutsAndBoltsForMigration(), $key);
  }

  private function customHostingFeatures() {
    $options = [];
    $options[]['category'] = 'Web Server';
    $options = array_merge($options, $this->webServers());
    $options['otherweb'] = 'Other (*)';

    $options[]['category'] = 'Databases';
    $options = array_merge($options, $this->databases());
    $options['otherdb'] = 'Other (*)';

    $options[]['category'] = 'Server Side Languages';
    $options = array_merge($options, $this->serverSideLanguages());
    $options['otherlanguage'] = 'Other (*)';

    $options[]['category'] = 'CMS';
    $options = array_merge($options, $this->cms());
    $options['othercms'] = 'Other (*)';
    $options[]['note'] = '* Specify in Additional below';
    return $options;
  }

  public function getCustomHostingFeaturesDescription($key) {
    return $this->getDescription($this->customHostingFeatures(), $key);
  }

  private function otherHacked() {
    $options = [];
    $options['sensitive'] = 'Website contains sensitive information';
    $options['multiple'] = 'Multiple websites are affected (please indicate below)';
    return $options;
  }

  public function getOtherHackedDescription($key) {
    return $this->getDescription($this->otherHacked(), $key);
  }

  private function technology() {
    $options = [];
    $options[]['category'] = 'Looking For';
    $options['custom'] = 'Custom Website Development';
    $options['application'] = 'Application Development';
    $options['website-application'] = 'Website Application Development';
    $options['mobile-application'] = 'Mobile Application Development';
    $options['drupal'] = 'Drupal Module';
    $options['wordpress'] = 'WordPress Plugin';
    $options['social'] = 'Social Integration';
    $options['looking-for-other'] = 'Other (*)';

    $options[]['category'] = 'Server Side Languages';
    $options = array_merge($options, $this->serverSideLanguages());
    $options['otherlanguage'] = 'Other (*)';

    $options[]['category'] = 'Frontend Languages / Frameworks';
    $options = array_merge($options, $this->frontendLanguages());
    $options['otherlanguage'] = 'Other (*)';

    $options[]['category'] = 'Databases';
    $options = array_merge($options, $this->databases());
    $options['otherdb'] = 'Other (*)';


    // $options = array_merge($options, $this->serverSideLanguages(), $this->frontendLanguages(), $this->databases());
    $options['other'] = 'Other (*)';
    $options[]['note'] = '* Specify in Additional below';

    return $options;
  }

  public function getTechnologyDescription($key) {
    return $this->getDescription($this->technology(), $key);
  }

  private function mailboxSizes() {
    $options = [];
    $options['L500'] = 'Less than 500 MB';
    $options['L1'] = 'Less than 1 GB';
    $options['M1'] = 'More than 1 GB';
    $options['M5'] = 'More than 5 GB';
    return $options;
  }

  public function getMailboxSizesDescription($key) {
    return $this->getDescription($this->mailboxSizes(), $key);
  }

  private function operatingSystems() {
    $options = [];
    $options['centos'] = 'CentOS';
    $options['redhat'] = 'Red Hat';
    $options['ubuntu'] = 'Ubuntu';
    $options['windows'] = 'Windows';
    $options['slackware'] = 'Slackware';
    ksort($options);
    return $options;
  }

  public function getOperatingSystemDescription($key) {
    return $this->getDescription($this->operatingSystems(), $key);
  }

  private function serverSideLanguages() {
    $options = [];
    $options['php'] = 'PHP';
    $options['ruby'] = 'Ruby';
    $options['perl'] = 'Perl';
    $options['aspnet'] = 'ASP.NET';
    $options['csharp'] = 'C#';
    $options['vbnet'] = 'VB.NET';
    $options['python'] = 'Python';
    ksort($options);
    return $options;
  }

  public function getServerSideLanguageDescription($key) {
    return $this->getDescription($this->serverSideLanguages(), $key);
  }

  private function frontendLanguages() {
    $options = [];
    $options['jquery'] = 'jQuery';
    $options['javascript'] = 'JavaScript';
    $options['reactjs'] = 'React.js';
    $options['angularjs'] = 'Angular.js';
    $options['vuejs'] = 'Vue.js';
    $options['flash'] = 'Flash';
    ksort($options);
    return $options;
  }

  public function getFrontendLanguageDescription($key) {
    return $this->getDescription($this->frontendLanguages(), $key);
  }

  private function webServers() {
    $options = [];
    $options['apache'] = 'Apache';
    $options['nodejs'] = 'node.js';
    $options['ngnix'] = 'ngnix';
    $options['tomcat'] = 'Tomcat';
    $options['lighttpd'] = 'lighttpd';
    ksort($options);
    return $options;
  }

  public function getWebServersDescription($key) {
    return $this->getDescription($this->webServers(), $key);
  }

  private function databases() {
    $options = [];
    $options['mongodb'] = 'Mongo DB';
    $options['redis'] = 'Redis';
    $options['berkeleydb'] = 'Berkeley DB';
    $options['microsoftsql'] = 'Microsoft SQL';
    $options['mysql'] = 'MySQL';
    $options['postgresql'] = 'PostgreSQL';
    ksort($options);
    return $options;
  }

  public function getDatabaseDescription($key) {
    return $this->getDescription($this->databases(), $key);
  }

  private function cms() {
    $options = [];
    $options['wordpress'] = 'WordPress';
    $options['drupal'] = 'Drupal';
    $options['joomla'] = 'Joomla';
    $options['october'] = 'October';
    $options['dotnetnuke'] = 'DotNetNuke';
    $options['keystone'] = 'Keystone';
    ksort($options);
    return $options;
  }

  public function getCMSDescription($key) {
    return $this->getDescription($this->cms(), $key);
  }

  private function memory() {
    $options = [];
    $options['512MB'] = '512 MB';
    $options['1-2GB'] = '1 - 2 GB';
    $options['2-4GB'] = '2 - 4 GB';
    $options['4-6 GB'] = '4 - 6 GB';
    $options['6-10 GB'] = '6 - 10 GB';
    $options['10-16 GB'] = '10 - 16 GB';
    $options['16+GB'] = '16+ GB';
    return $options;
  }

  public function getMemoryDescription($key) {
    return $this->getDescription($this->memory(), $key);
  }

  private function storage() {
    $options = [];
    $options['10-40GB'] = '10 - 40 GB';
    $options['40-80GB'] = '40 - 80 GB';
    $options['80-160GB'] = '80 - 160 GB';
    $options['160-320GB'] = '160 - 320 GB';
    $options['320-640GB'] = '320 - 640 GB';
    $options['640+GB'] = '640+ GB';
    return $options;
  }

  public function getStorageDescription($key) {
    return $this->getDescription($this->storage(), $key);
  }

  private function hyperVisors() {
    $options = [];
    $options['xen'] = 'Xen';
    $options['kvm'] = 'KVM';
    $options['hyper-v'] = 'Hyper-V';
    ksort($options);
    return $options;
  }

  public function getHyperVisorDescription($key) {
    return $this->getDescription($this->hyperVisors(), $key);
  }

  private function cloudServerHyperVisors() {
    $options = [];
    $options = array_merge($options, $this->noPreference(), $this->hyperVisors());
    return $options;
  }

  public function getCloudServerHyperVisorDescription($key) {
    return $this->getDescription($this->cloudServerHyperVisors(), $key);
  }

  private function managedHostingSolutions() {
    $options = [];
    $options['managed-security'] = 'Managed Security';
    $options['managed-storage'] = 'Managed Storage';
    $options['managed-databases'] = 'Managed Databases';
    $options['load-balancing-and-ha'] = 'Load Balancing & HA';
    $options['monitoring-reporting-and-sla'] = 'Monitoring, Reporting & SLA';
    $options['data-backup-and-recovery'] = 'Data Backup and Recovery';
    $options['server-upgrades'] = 'Server Upgrades';
    $options['server-migration'] = 'Server Migration';
    $options['professional-services'] = 'Professional Services';
    $options['performance-issues'] = 'Performance Issues';
    ksort($options);
    $options['other'] = 'Other (Please specify below)';
    return $options;
  }

  public function getManagedHostingSolutionsDescription($key) {
    return $this->getDescription($this->managedHostingSolutions(), $key);
  }


  private function managedWebsitesAndAppsSolutions() {
    $options = [];
    $options['cms-updates'] = 'CMS Updates';
    $options['content-updates'] = 'Content Updates';
    $options['backup-and-recovery'] = 'Backup and Recovery';
    $options['monitoring-reporting-and-sla'] = 'Monitoring, Reporting & SLA';
    $options['migration'] = 'Migration';
    $options['something-is-broken'] = 'Something is Broken';
    $options['professional-services'] = 'Professional Services';
    $options['performance-issues'] = 'Performance Issues';
    ksort($options);
    $options['other'] = 'Other (Please specify below)';
    return $options;
  }

  public function getManagedWebsitesAndAppsSolutionsDescription($key) {
    return $this->getDescription($this->managedWebsitesAndAppsSolutions(), $key);
  }
}
