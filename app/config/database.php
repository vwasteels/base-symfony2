<?php
// global
$container->setParameter('database_driver', 'pdo_mysql');

$vcap_service = getenv("VCAP_SERVICES");
if($vcap_service !== false) {
  // settings for appfog
  $services_json = json_decode($vcap_service,true);
  $mysql_config = $services_json["mysql-5.1"][0]["credentials"];
  
  $container->setParameter('database_host', $mysql_config["hostname"]);
  $container->setParameter('database_port', $mysql_config["port"]);
  $container->setParameter('database_name', $mysql_config["name"]);
  $container->setParameter('database_user', $mysql_config["username"]);
  $container->setParameter('database_password', $mysql_config["password"]);
  
} else {
  // settings for local
  $container->setParameter('database_host', 'localhost');
  $container->setParameter('database_port', '');
  $container->setParameter('database_name', 'apcm');
  $container->setParameter('database_user', 'apcm');
  $container->setParameter('database_password', '123qwe');
}
?>
