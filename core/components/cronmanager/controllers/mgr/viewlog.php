<?php

$modx->regClientStartupScript($cronmanager->config['jsUrl'].'mgr/combos.js');
$modx->regClientStartupScript($cronmanager->config['jsUrl'].'mgr/widgets/cronjoblog.grid.js');
$modx->regClientStartupScript($cronmanager->config['jsUrl'].'mgr/widgets/logs.panel.js');
 
return '<div id="cronmanager-panel-logs-div"></div>';

?>