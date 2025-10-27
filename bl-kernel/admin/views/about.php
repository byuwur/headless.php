<?php

echo Bootstrap::pageTitle(array('title' => $L->g('About'), 'icon' => 'info-circle'));

echo '
<table class="table table-striped mt-3">
	<tbody>
';

echo '<tr>';
echo '<td>Headless.PHP Edition</td>';
if (defined('HEADLESS_PHP_PRO')) {
    echo '<td>PRO - ' . $L->g('Thanks for supporting Headless.PHP') . ' <span class="fa fa-heart" style="color: #ffc107"></span></td>';
} else {
    echo '<td>Standard - <a target="_blank" href="https://pro.bludit.com">' . $L->g('Upgrade to Bludit PRO') . '</a></td>';
}
echo '</tr>';

echo '<tr>';
echo '<td>Headless.PHP Version</td>';
echo '<td>' . HEADLESS_PHP_VERSION . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Headless.PHP Codename</td>';
echo '<td>' . HEADLESS_PHP_CODENAME . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Headless.PHP Build Number</td>';
echo '<td>' . HEADLESS_PHP_BUILD . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Disk usage</td>';
echo '<td>' . Filesystem::bytesToHumanFileSize(Filesystem::getSize(PATH_ROOT)) . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td><a href="' . HTML_PATH_ADMIN_ROOT . 'developers' . '">Headless.PHP Developers</a></td>';
echo '<td></td>';
echo '</tr>';

echo '
	</tbody>
</table>
';
