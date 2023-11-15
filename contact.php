<?
if (!$_POST)
exit();

if (is_bot($_SERVER['HTTP_USER_AGENT'])) exit();

if ($_POST['email'])
exit();
$mhost = 'localhost';//	Хост mysql
$muser = 'u0980170_default';//	Пользователь mysql
$mpass = '31_0lp7W';//	Пароль mysql
$mbase = 'u0980170_default';//	База mysql

ini_set('error_reporting', E_ALL);

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
$mysql=new mysqli($mhost,$muser,$mpass,$mbase);
$charset='utf8';
$mysql->set_charset($charset);
if($mysql->connect_errno)
	exit('<h1 align="center">Не удалось подключиться к БД</h1><br>Причина: '.$mysql->connect_error);





$ttoken='5791189845:AAElCM5DxtMY3XAO8RAAnAevyj5rexWAzjQ';
$message="*С сайта Урмана получена новая заявка на консультацию!*\xF0\x9F\x94\xA5\r\n
Имя: {$_POST['name']} \r\n
Контактный телефон:{$_POST['phone']} \r\n
Комментарий:{$_POST['comment']}
";

$response = array(
	'chat_id' => 160559132,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");

$response = array(
	'chat_id' => 352403660,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");

$response = array(
	'chat_id' => 448412796,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");

$response = array(
	'chat_id' => 432344511,
	'text' => $message,
    'parse_mode' => 'markdown',
    'resize_keyboard' => true
);	
		

send($response,"sendMessage");








$title = 'Урман - новая заявка';
$leads['add']=array(
  array(
    'name'=>$title,
    'created_at'=>time(),
    'responsible_user_id'=>8604445,
    'pipeline_id' => 5826421,
    'tags' => 'urman' #Tags

  )
);


//$note_id=amocrm('leads',$leads);

$notes['add']=array(
  array(
   'element_id' => $note_id,
      'element_type' => '2',
      'text' => $message,
      'note_type' => '4',
      'created_at' => time()

  )
);

//amocrm('notes',$notes);
  

$responsible_user_id=8604445;





$roistatData = array(
    'roistat' => isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : 'nocookie',
    'key'     => 'NWQ1YmMwYjYyMjg5NmJjN2M4NTM3ODVhODExMDBhOGE6MTY0Mzk0', // Ключ для интеграции с CRM, указывается в настройках интеграции с CRM.
    'title'   => 'С сайта Урмана получена новая заявка на консультацию!', // Название сделки
    'comment' => $_POST['comment'], // Комментарий к сделке
    'name'    => $_POST['name'], // Имя клиента
    'email'   => '', // Email клиента
    'phone'   => $_POST['phone'], // Номер телефона клиента
 'is_skip_sending' => '0', // Не отправлять заявку в CRM.
  'fields' => array(
  'responsible_user_id'=>$responsible_user_id,
    'pipeline_id' => 5826421
 )
   
   // 'fields'  => array(
    // Массив дополнительных полей. Если дополнительные поля не нужны, оставьте массив пустым.
    // Примеры дополнительных полей смотрите в таблице ниже.
    // Помимо массива fields, который используется для сделки, есть еще массив client_fields, который используется для установки полей контакта.
  //   "charset" => "utf8", // Сервер преобразует значения полей из указанной кодировки в UTF-8.
  //  ),
);

file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));



$mysql->query("UPDATE countLeads SET count=count+1");










header("Location: ./thankyou.html");



function amocrm($method,$body)
{
  GLOBAL $mysql;  
$subdomain = 'vmstroy'; //Поддомен нужного аккаунта
$link = 'https://' . $subdomain . '.amocrm.ru/api/v2/'.$method; //Формируем URL для запроса

$res=$mysql->query("SELECT * FROM tbottoken WHERE id=1");
$token=$res->fetch_assoc();
$access_token = $token['access'];
$refresh_token = $token['refresh'];
$life_token = $token['time'] + $token['expires'];
if (time()>$life_token)
{
    
    $link2 = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; 

/** Соберем данные для запроса */
$data = array(
	'client_id' => '66402b5e-db37-4333-b06e-e25afef640f5',
	'client_secret' => '2mope829jilszXnlw9NqEXmyh47fknYtBAiGuOKzzq420mZ5Z85lffslsITfNxs5',
	'grant_type' => 'refresh_token',
	'refresh_token' => $refresh_token,
	'redirect_uri' => 'https://vm-stroy.site/amo/amo.php',
);

/**
 * Нам необходимо инициировать запрос к серверу.
 * Воспользуемся библиотекой cURL (поставляется в составе PHP).
 * Вы также можете использовать и кроссплатформенную программу cURL, если вы не программируете на PHP.
 */
$curl = curl_init(); 
/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link2);
curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl); 
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
/** Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int)$code;
$errors = [
	400 => 'Bad request',
	401 => 'Unauthorized',
	403 => 'Forbidden',
	404 => 'Not found',
	500 => 'Internal server error',
	502 => 'Bad gateway',
	503 => 'Service unavailable',
];

try
{
	/** Если код ответа не успешный - возвращаем сообщение об ошибке  */
	if ($code < 200 || $code > 204) {
		throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
	}
}
catch(\Exception $e)
{
	die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
}

/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$response = json_decode($out, true);

$access_token = $response['access_token']; 
$refresh_token = $response['refresh_token'];

$expires_in = $response['expires_in']; 
 $time=time();   
    
    $mysql->query("UPDATE tbottoken SET time='$time',access='$access_token', refresh='$refresh_token', expires='$expires_in' WHERE id=1");
    
    
}




$headers = [
	'Authorization: Bearer ' . $access_token
];
    
 $curl = curl_init(); //Сохраняем дескриптор сеанса cURL
/** Устанавливаем необходимые опции для сеанса cURL  */
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
curl_setopt($curl,CURLOPT_URL, $link);
curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl,CURLOPT_HEADER, false);
curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);
/** Теперь мы можем обработать ответ, полученный от сервера. Это пример. Вы можете обработать данные своим способом. */
$code = (int)$code;



/**
 * Данные получаем в формате JSON, поэтому, для получения читаемых данных,
 * нам придётся перевести ответ в формат, понятный PHP
 */
$response = json_decode($out, true);   
 
 if ($method=='leads')   
return $response['_embedded']['items'][0]['id'];
 if ($method=='notes')   
return $response['_embedded']['items'][0]['id'];
    
}

function send($param,$method)
{
    GLOBAL $ttoken;
$ch = curl_init('https://api.telegram.org/bot' . $ttoken . '/'.$method);  
curl_setopt($ch, CURLOPT_POST, 1);  
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_exec($ch);
curl_close($ch);
}


function is_bot($sistema){
 // bots de buscadores
    $bots = array(
         'Googlebot'
        , 'Baiduspider'
        , 'ia_archiver'
        , 'R6_FeedFetcher'
        , 'NetcraftSurveyAgent'
        , 'Sogou web spider'
        , 'bingbot'
        , 'Yahoo! Slurp'
        , 'facebookexternalhit'
        , 'PrintfulBot'
        , 'msnbot'
        , 'Twitterbot'
        , 'UnwindFetchor'
        , 'urlresolver'
        , 'Butterfly'
        , 'TweetmemeBot'
        , 'PaperLiBot'
        , 'MJ12bot'
        , 'AhrefsBot'
        , 'Exabot'
        , 'Ezooms'
        , 'YandexBot'
        , 'SearchmetricsBot'
        , 'picsearch'
        , 'TweetedTimes Bot'
        , 'QuerySeekerSpider'
        , 'ShowyouBot'
        , 'woriobot'
        , 'merlinkbot'
        , 'BazQuxBot'
        , 'Kraken'
        , 'SISTRIX Crawler'
        , 'R6_CommentReader'
        , 'magpie-crawler'
        , 'GrapeshotCrawler'
        , 'PercolateCrawler'
        , 'MaxPointCrawler'
        , 'NetSeer crawler'
        , 'grokkit-crawler'
        , 'SMXCrawler'
        , 'PulseCrawler'
        , 'Y!J-BRW'
        , '80legs'
        , 'Mediapartners-Google'
        , 'InAGist'
        , 'Python-urllib'
        , 'NING'
        , 'TencentTraveler'
        , 'Feedfetcher-Google'
        , 'mon.itor.us'
        , 'spbot'
        , 'Feedly'
        , 'bitlybot'
        , 'ADmantX'
        , 'Niki-Bot'
        , 'Pinterest'
        , 'python-requests'
        , 'DotBot'
        , 'HTTP_Request2'
        , 'linkdexbot'
        , 'A6-Indexer'
        , 'TwitterFeed'
        , 'Microsoft Office'
        , 'Pingdom'
        , 'BTWebClient'
        , 'KatBot'
        , 'SiteCheck'
        , 'proximic'
        , 'Sleuth'
        , 'Abonti'
        , '(BOT for JCE)'
        , 'Baidu'
        , 'Tiny Tiny RSS'
        , 'newsblur'
        , 'updown_tester'
        , 'linkdex'
        , 'baidu'
        , 'searchmetrics'
        , 'genieo'
        , 'majestic12'
        , 'spinn3r'
        , 'profound'
        , 'domainappender'
        , 'VegeBot'
        , 'terrykyleseoagency.com'
        , 'CommonCrawler Node'
        , 'AdlesseBot'
        , 'metauri.com'
        , 'libwww-perl'
        , 'rogerbot-crawler'
        , 'ltx71'
        , 'Qwantify'
        , 'Traackr.com'
        , 'Re-Animator Bot'
        , 'Pcore-HTTP'
        , 'BoardReader'
        , 'omgili'
        , 'okhttp'
        , 'CCBot'
        , 'Java/1.8'
        , 'semrush.com'
        , 'feedbot'
        , 'CommonCrawler'
        , 'MetaURI'
        , 'ibwww-perl'
        , 'rogerbot'
        , 'MegaIndex'
        , 'BLEXBot'
        , 'FlipboardProxy'
        , 'techinfo@ubermetrics-technologies.com'
        , 'trendictionbot'
        , 'Mediatoolkitbot'
        , 'trendiction'
        , 'ubermetrics'
        , 'ScooperBot'
        , 'TrendsmapResolver'
        , 'Nuzzel'
        , 'Go-http-client'
        , 'Applebot'
        , 'LivelapBot'
        , 'GroupHigh'
        , 'SemrushBot'
        , 'commoncrawl'
        , 'istellabot'
        , 'DomainCrawler'
        , 'cs.daum.net'
        , 'StormCrawler'
        , 'GarlikCrawler'
        , 'The Knowledge AI'
        , 'getstream.io/winds'
        , 'YisouSpider'
        , 'archive.org_bot'
        , 'semantic-visions.com'
        , 'FemtosearchBot'
        , '360Spider'
        , 'linkfluence.com'
        , 'glutenfreepleasure.com'
        , 'Gluten Free Crawler'
        , 'YaK/1.0'
        , 'Cliqzbot'
        , 'app.hypefactors.com'
        , 'axios'
        , 'webdatastats.com'
        , 'schmorp.de'
        , 'SEOkicks'
        , 'DuckDuckBot'
        , 'Barkrowler'
        , 'ZoominfoBot'
        , 'Linguee Bot'
        , 'Mail.RU_Bot'
        , 'OnalyticaBot'
        , 'admantx-adform'
        , 'Zombiebot'
        , 'Nutch'
        , 'SemanticScholarBot'
        , 'Jetslide'
        , 'scalaj-http'
        , 'XoviBot'
        , 'sysomos.com'
        , 'PocketParser'
        , 'newspaper'
        , 'serpstatbot'
        , 'MetaJobBot'
        , 'SeznamBot/3.2'
        , 'VelenPublicWebCrawler/1.0'
        , 'WordPress.com mShots'
        , 'adscanner'
        , 'BacklinkCrawler'
        , 'netEstate NE Crawler'
        , 'Astute SRM'
        , 'GigablastOpenSource/1.0'
        , 'DomainStatsBot'
        , 'Winds: Open Source RSS & Podcast'
        , 'dlvr.it'
        , 'BehloolBot'
        , '7Siters'
        , 'AwarioSmartBot'
        , 'Apache-HttpClient/5'
        , 'Seekport Crawler'
        , 'AHC/2.1'
        , 'eCairn-Grabber'
        , 'mediawords bot'
        , 'PHP-Curl-Class'
        , 'Scrapy'
        , 'curl/7'
        , 'Blackboard'
        , 'NetNewsWire'
        , 'node-fetch'
        , 'admantx'
        , 'metadataparser'
        , 'Domains Project'
        , 'SerendeputyBot'
        , 'Moreover'
        , 'DuckDuckGo' 
        , 'monitoring-plugins'
        , 'Selfoss'
        , 'Adsbot'
        , 'acebookexternalhit'
        , 'SpiderLing'
        , 'Cocolyzebot'
        , 'TTD-Content'
        , 'superfeedr'
        , 'Twingly'
        , 'Google-Apps-Scrip'
        , 'LinkpadBot'
        , 'CensysInspect'
        , 'Reeder'
        , 'tweetedtimes'
        , 'Amazonbot'
        , 'MauiBot'
        , 'Symfony BrowserKit'
        , 'DataForSeoBot'
        , 'GoogleProducer'
        , 'TinEye-bot-live'
        , 'sindresorhus/got'
        , 'CriteoBot'
        , 'Down/5'
        , 'Yahoo Ad monitoring'
        , 'MetaInspector'
        , 'PetalBot'
        , 'MetadataScraper'
        , 'Cloudflare SpeedTest'
        , 'aiohttp'
        , 'AppEngine-Google'
        , 'heritrix'
        , 'sqlmap'
        , 'Buck'
        , 'wp_is_mobile'
        , '01h4x.com'
        , '404checker'
        , '404enemy'
        , 'AIBOT'
        , 'ALittle Client'
        , 'ASPSeek'
        , 'Aboundex'
        , 'Acunetix'
        , 'AfD-Verbotsverfahren'
        , 'AiHitBot'
        , 'Aipbot'
        , 'Alexibot'
        , 'AllSubmitter'
        , 'Alligator'
        , 'AlphaBot'
        , 'Anarchie'
        , 'Anarchy'
        , 'Anarchy99'
        , 'Ankit'
        , 'Anthill'
        , 'Apexoo'
        , 'Aspiegel'
        , 'Asterias'
        , 'Atomseobot'
        , 'Attach'
        , 'AwarioRssBot'
        , 'BBBike'
        , 'BDCbot'
        , 'BDFetch'
        , 'BackDoorBot'
        , 'BackStreet'
        , 'BackWeb'
        , 'Backlink-Ceck'
        , 'Badass'
        , 'Bandit'
        , 'BatchFTP'
        , 'Battleztar Bazinga'
        , 'BetaBot'
        , 'Bigfoot'
        , 'Bitacle'
        , 'BlackWidow'
        , 'Black Hole'
        , 'Blow'
        , 'BlowFish'
        , 'Boardreader'
        , 'Bolt'
        , 'BotALot'
        , 'Brandprotect'
        , 'Brandwatch'
        , 'Buddy'
        , 'BuiltBotTough'
        , 'BuiltWith'
        , 'Bullseye'
        , 'BunnySlippers'
        , 'BuzzSumo'
        , 'CATExplorador'
        , 'CODE87'
        , 'CSHttp'
        , 'Calculon'
        , 'CazoodleBot'
        , 'Cegbfeieh'
        , 'CheTeam'
        , 'CheeseBot'
        , 'CherryPicker'
        , 'ChinaClaw'
        , 'Chlooe'
        , 'Citoid'
        , 'Claritybot'
        , 'Cloud mapping'
        , 'Cogentbot'
        , 'Collector'
        , 'Copier'
        , 'CopyRightCheck'
        , 'Copyscape'
        , 'Cosmos'
        , 'Craftbot'
        , 'Crawling at Home Project'
        , 'CrazyWebCrawler'
        , 'Crescent'
        , 'CrunchBot'
        , 'Curious'
        , 'Custo'
        , 'CyotekWebCopy'
        , 'DBLBot'
        , 'DIIbot'
        , 'DSearch'
        , 'DTS Agent'
        , 'DataCha0s'
        , 'DatabaseDriverMysqli'
        , 'Demon'
        , 'Deusu'
        , 'Devil'
        , 'Digincore'
        , 'DigitalPebble'
        , 'Dirbuster'
        , 'Disco'
        , 'Discobot'
        , 'Discoverybot'
        , 'Dispatch'
        , 'DittoSpyder'
        , 'DnBCrawler-Analytics'
        , 'DnyzBot'
        , 'DomCopBot'
        , 'DomainAppender'
        , 'DomainSigmaCrawler'
        , 'Dotbot'
        , 'Download Wonder'
        , 'Dragonfly'
        , 'Drip'
        , 'ECCP/1.0'
        , 'EMail Siphon'
        , 'EMail Wolf'
        , 'EasyDL'
        , 'Ebingbong'
        , 'Ecxi'
        , 'EirGrabber'
        , 'EroCrawler'
        , 'Evil'
        , 'Express WebPictures'
        , 'ExtLinksBot'
        , 'Extractor'
        , 'ExtractorPro'
        , 'Extreme Picture Finder'
        , 'EyeNetIE'
        , 'FDM'
        , 'FHscan'
        , 'Fimap'
        , 'Firefox/7.0'
        , 'FlashGet'
        , 'Flunky'
        , 'Foobot'
        , 'Freeuploader'
        , 'FrontPage'
        , 'Fuzz'
        , 'FyberSpider'
        , 'Fyrebot'
        , 'G-i-g-a-b-o-t'
        , 'GT::WWW'
        , 'GalaxyBot'
        , 'Genieo'
        , 'GermCrawler'
        , 'GetRight'
        , 'GetWeb'
        , 'Getintent'
        , 'Gigabot'
        , 'Go!Zilla'
        , 'Go-Ahead-Got-It'
        , 'GoZilla'
        , 'Gotit'
        , 'GrabNet'
        , 'Grabber'
        , 'Grafula'
        , 'GrapeFX'
        , 'GridBot'
        , 'HEADMasterSEO'
        , 'HMView'
        , 'HTMLparser'
        , 'HTTP::Lite'
        , 'HTTrack'
        , 'Haansoft'
        , 'HaosouSpider'
        , 'Harvest'
        , 'Havij'
        , 'Hloader'
        , 'HonoluluBot'
        , 'Humanlinks'
        , 'HybridBot'
        , 'IDBTE4M'
        , 'IDBot'
        , 'IRLbot'
        , 'Iblog'
        , 'Id-search'
        , 'IlseBot'
        , 'Image Fetch'
        , 'Image Sucker'
        , 'IndeedBot'
        , 'Indy Library'
        , 'InfoNaviRobot'
        , 'InfoTekies'
        , 'Intelliseek'
        , 'InterGET'
        , 'InternetSeer'
        , 'Internet Ninja'
        , 'Iria'
        , 'Iskanie'
        , 'IstellaBot'
        , 'JOC Web Spider'
        , 'JamesBOT'
        , 'Jbrofuzz'
        , 'JennyBot'
        , 'JetCar'
        , 'Jetty'
        , 'JikeSpider'
        , 'Joomla'
        , 'Jorgee'
        , 'JustView'
        , 'Jyxobot'
        , 'Kenjin Spider'
        , 'Keybot Translation-Search-Machine'
        , 'Keyword Density'
        , 'Kinza'
        , 'Kozmosbot'
        , 'LNSpiderguy'
        , 'LWP::Simple'
        , 'Lanshanbot'
        , 'Larbin'
        , 'Leap'
        , 'LeechFTP'
        , 'LeechGet'
        , 'LexiBot'
        , 'Lftp'
        , 'LibWeb'
        , 'Libwhisker'
        , 'LieBaoFast'
        , 'Lightspeedsystems'
        , 'Likse'
        , 'LinkScan'
        , 'LinkWalker'
        , 'Linkbot'
        , 'LinkextractorPro'
        , 'LinksManager'
        , 'LinqiaMetadataDownloaderBot'
        , 'LinqiaRSSBot'
        , 'LinqiaScrapeBot'
        , 'Lipperhey'
        , 'Lipperhey Spider'
        , 'Litemage_walker'
        , 'Lmspider'
        , 'MFC_Tear_Sample'
        , 'MIDown tool'
        , 'MIIxpc'
        , 'MQQBrowser'
        , 'MSFrontPage'
        , 'MSIECrawler'
        , 'MTRobot'
        , 'Mag-Net'
        , 'Magnet'
        , 'Majestic-SEO'
        , 'Majestic12'
        , 'Majestic SEO'
        , 'MarkMonitor'
        , 'MarkWatch'
        , 'Mass Downloader'
        , 'Masscan'
        , 'Mata Hari'
        , 'Mb2345Browser'
        , 'MeanPath Bot'
        , 'Meanpathbot'
        , 'Metauri'
        , 'MicroMessenger'
        , 'Microsoft Data Access'
        , 'Microsoft URL Control'
        , 'Minefield'
        , 'Mister PiX'
        , 'Moblie Safari'
        , 'Mojeek'
        , 'Mojolicious'
        , 'MolokaiBot'
        , 'Morfeus Fucking Scanner'
        , 'Mozlila'
        , 'Mr.4x3'
        , 'Msrabot'
        , 'Musobot'
        , 'NICErsPRO'
        , 'NPbot'
        , 'Name Intelligence'
        , 'Nameprotect'
        , 'Navroad'
        , 'NearSite'
        , 'Needle'
        , 'Nessus'
        , 'NetAnts'
        , 'NetLyzer'
        , 'NetMechanic'
        , 'NetSpider'
        , 'NetZIP'
        , 'Net Vampire'
        , 'Netcraft'
        , 'Nettrack'
        , 'Netvibes'
        , 'NextGenSearchBot'
        , 'Nibbler'
        , 'Niki-bot'
        , 'Nikto'
        , 'NimbleCrawler'
        , 'Nimbostratus'
        , 'Ninja'
        , 'Nmap'
        , 'Not'
        , 'Nuclei'
        , 'Octopus'
        , 'Offline Explorer'
        , 'Offline Navigator'
        , 'OnCrawl'
        , 'OpenLinkProfiler'
        , 'OpenVAS'
        , 'Openfind'
        , 'Openvas'
        , 'OrangeBot'
        , 'OrangeSpider'
        , 'OutclicksBot'
        , 'OutfoxBot'
        , 'PECL::HTTP'
        , 'PHPCrawl'
        , 'POE-Component-Client-HTTP'
        , 'PageAnalyzer'
        , 'PageGrabber'
        , 'PageScorer'
        , 'PageThing.com'
        , 'Page Analyzer'
        , 'Pandalytics'
        , 'Panscient'
        , 'Papa Foto'
        , 'Pavuk'
        , 'PeoplePal'
        , 'Petalbot'
        , 'Pi-Monster'
        , 'Picscout'
        , 'Picsearch'
        , 'PictureFinder'
        , 'Piepmatz'
        , 'Pimonster'
        , 'Pixray'
        , 'PleaseCrawl'
        , 'Pockey'
        , 'ProPowerBot'
        , 'ProWebWalker'
        , 'Probethenet'
        , 'Psbot'
        , 'Pu_iN'
        , 'Pump'
        , 'PxBroker'
        , 'PyCurl'
        , 'QueryN Metasearch'
        , 'Quick-Crawler'
        , 'RSSingBot'
        , 'RankActive'
        , 'RankActiveLinkBot'
        , 'RankFlex'
        , 'RankingBot'
        , 'RankingBot2'
        , 'Rankivabot'
        , 'RankurBot'
        , 'Re-re'
        , 'ReGet'
        , 'RealDownload'
        , 'Reaper'
        , 'RebelMouse'
        , 'Recorder'
        , 'RedesScrapy'
        , 'RepoMonkey'
        , 'Ripper'
        , 'RocketCrawler'
        , 'Rogerbot'
        , 'SBIder'
        , 'SEOlyticsCrawler'
        , 'SEOprofiler'
        , 'SEOstats'
        , 'SISTRIX'
        , 'SMTBot'
        , 'SalesIntelligent'
        , 'ScanAlert'
        , 'Scanbot'
        , 'ScoutJet'
        , 'Screaming'
        , 'ScreenerBot'
        , 'ScrepyBot'
        , 'Searchestate'
        , 'Seekport'
        , 'SemanticJuice'
        , 'Semrush'
        , 'SentiBot'
        , 'SeoSiteCheckup'
        , 'SeobilityBot'
        , 'Seomoz'
        , 'Shodan'
        , 'Siphon'
        , 'SiteCheckerBotCrawler'
        , 'SiteExplorer'
        , 'SiteLockSpider'
        , 'SiteSnagger'
        , 'SiteSucker'
        , 'Site Sucker'
        , 'Sitebeam'
        , 'Siteimprove'
        , 'Sitevigil'
        , 'SlySearch'
        , 'SmartDownload'
        , 'Snake'
        , 'Snapbot'
        , 'Snoopy'
        , 'SocialRankIOBot'
        , 'Sociscraper'
        , 'Sosospider'
        , 'Sottopop'
        , 'SpaceBison'
        , 'Spammen'
        , 'SpankBot'
        , 'Spanner'
        , 'Spbot'
        , 'SputnikBot'
        , 'Sqlmap'
        , 'Sqlworm'
        , 'Sqworm'
        , 'Steeler'
        , 'Stripper'
        , 'Sucker'
        , 'Sucuri'
        , 'SuperBot'
        , 'SuperHTTP'
        , 'Surfbot'
        , 'SurveyBot'
        , 'Suzuran'
        , 'Swiftbot'
        , 'Szukacz'
        , 'T0PHackTeam'
        , 'T8Abot'
        , 'Teleport'
        , 'TeleportPro'
        , 'Telesoft'
        , 'Telesphoreo'
        , 'Telesphorep'
        , 'TheNomad'
        , 'The Intraformant'
        , 'Thumbor'
        , 'TightTwatBot'
        , 'Titan'
        , 'Toata'
        , 'Toweyabot'
        , 'Tracemyfile'
        , 'Trendiction'
        , 'Trendictionbot'
        , 'True_Robot'
        , 'Turingos'
        , 'Turnitin'
        , 'TurnitinBot'
        , 'TwengaBot'
        , 'Twice'
        , 'Typhoeus'
        , 'URLy.Warning'
        , 'URLy Warning'
        , 'UnisterBot'
        , 'Upflow'
        , 'V-BOT'
        , 'VB Project'
        , 'VCI'
        , 'Vacuum'
        , 'Vagabondo'
        , 'VelenPublicWebCrawler'
        , 'VeriCiteCrawler'
        , 'VidibleScraper'
        , 'Virusdie'
        , 'VoidEYE'
        , 'Voil'
        , 'Voltron'
        , 'WASALive-Bot'
        , 'WBSearchBot'
        , 'WEBDAV'
        , 'WISENutbot'
        , 'WPScan'
        , 'WWW-Collector-E'
        , 'WWW-Mechanize'
        , 'WWW::Mechanize'
        , 'WWWOFFLE'
        , 'Wallpapers'
        , 'Wallpapers/3.0'
        , 'WallpapersHD'
        , 'WeSEE'
        , 'WebAuto'
        , 'WebBandit'
        , 'WebCollage'
        , 'WebCopier'
        , 'WebEnhancer'
        , 'WebFetch'
        , 'WebFuck'
        , 'WebGo IS'
        , 'WebImageCollector'
        , 'WebLeacher'
        , 'WebPix'
        , 'WebReaper'
        , 'WebSauger'
        , 'WebStripper'
        , 'WebSucker'
        , 'WebWhacker'
        , 'WebZIP'
        , 'Web Auto'
        , 'Web Collage'
        , 'Web Enhancer'
        , 'Web Fetch'
        , 'Web Fuck'
        , 'Web Pix'
        , 'Web Sauger'
        , 'Web Sucker'
        , 'Webalta'
        , 'WebmasterWorldForumBot'
        , 'Webshag'
        , 'WebsiteExtractor'
        , 'WebsiteQuester'
        , 'Website Quester'
        , 'Webster'
        , 'Whack'
        , 'Whacker'
        , 'Whatweb'
        , 'Who.is Bot'
        , 'Widow'
        , 'WinHTTrack'
        , 'WiseGuys Robot'
        , 'Wonderbot'
        , 'Woobot'
        , 'Wotbox'
        , 'Wprecon'
        , 'Xaldon WebSpider'
        , 'Xaldon_WebSpider'
        , 'Xenu'
        , 'YoudaoBot'
        , 'Zade'
        , 'Zauba'
        , 'Zermelo'
        , 'Zeus'
        , 'Zitebot'
        , 'ZmEu'
        , 'ZoomBot'
        , 'ZumBot'
        , 'ZyBorg'
        , 'arquivo-web-crawler'
        , 'arquivo.pt'
        , 'autoemailspider'
        , 'backlink-check'
        , 'cah.io.community'
        , 'check1.exe'
        , 'clark-crawler'
        , 'coccocbot'
        , 'cognitiveseo'
        , 'com.plumanalytics'
        , 'crawl.sogou.com'
        , 'crawler.feedback'
        , 'crawler4j'
        , 'dataforseo.com'
        , 'demandbase-bot'
        , 'domainsproject.org'
        , 'eCatch'
        , 'evc-batch'
        , 'facebookscraper'
        , 'gopher'
        , 'instabid'
        , 'internetVista monitor'
        , 'ips-agent'
        , 'isitwp.com'
        , 'iubenda-radar'
        , 'lwp-request'
        , 'lwp-trivial'
        , 'meanpathbot'
        , 'mediawords'
        , 'muhstik-scan'
        , 'oBot'
        , 'page scorer'
        , 'pcBrowser'
        , 'plumanalytics'
        , 'polaris version'
        , 'probe-image-size'
        , 'ripz'
        , 's1z.ru'
        , 'satoristudio.net'
        , 'scan.lol'
        , 'seobility'
        , 'seocompany.store'
        , 'seoscanners'
        , 'seostar'
        , 'sexsearcher'
        , 'sitechecker.pro'
        , 'siteripz'
        , 'sogouspider'
        , 'sp_auditbot'
        , 'spyfu'
        , 'sysscan'
        , 'tAkeOut'
        , 'trendiction.com'
        , 'trendiction.de'
        , 'ubermetrics-technologies.com'
        , 'voyagerx.com'
        , 'webgains-bot'
        , 'webmeup-crawler'
        , 'webpros.com'
        , 'webprosbot'
        , 'x09Mozilla'
        , 'x22Mozilla'
        , 'xpymep1.exe'
        , 'zauba.io'
        , 'zgrab'
        , 'petalsearch'        
        , 'protopage'
        , 'Miniflux'
        , 'Feeder'
        , 'Semanticbot' 
        , 'ImageFetcher'
        , 'Mastodon' 
        , 'Neevabot'
        , 'Pleroma'
        , 'Akkoma'
        , 'koyu.space'
        , 'Embedly'
        , 'Mjukisbyxor'        
        , 'Giant Rhubarb'
        , 'GozleBot'
        , 'Friendica'
        , 'WhatsApp'
        , 'XenForo'        
        , 'Yeti'
        , 'MuckRack'
        , 'PhxBot'
        , 'Bytespider'
        , 'GPTBot'
        , 'SummalyBot'
        , 'LinkedInBot'
        , 'SpiderWeb'
        , 'SpaceCowboys'
        , 'LCC'
        );

 // si lo encuentra devuelve true, si no, false
    foreach($bots as $b)
        {
            if( stripos( $sistema, $b ) !== false ) return true;
        }
    return false;
}

?>