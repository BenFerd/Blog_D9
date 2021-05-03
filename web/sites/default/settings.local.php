<?php

// @codingStandardsIgnoreFile
$siteUrl = 'http://blog.local/';

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['discovery_migration'] = 'cache.backend.memory';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['extension_discovery_scan_tests'] = TRUE;
//$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;
$settings['hash_salt'] =  hash('sha256', 'wvn-blog');
$config['config_split.config_split.config_dev']['status'] = TRUE;

$config['media.settings']['iframe_domain'] = $siteUrl;
$config['media.settings']['oembed_providers_url'] = $siteUrl . '/core/modules/media/tests/fixtures/oembed/providers.json';

$databases['default']['default'] = array (
  'database' => 'blog_food',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
  'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
);
