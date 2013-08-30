<?php

function themeConfig($form) {
		echo('<style>body{font-family:Microsoft Yahei,微软雅黑;}</style><div style="font-size:14px;border-left:5px solid #1A1A1A;padding-left:8px;">Default-M&nbsp;Theme&nbsp;Ver 1.0 &nbsp;&nbsp;<strong>Theme Settings</strong>&nbsp;&nbsp;<a href="https://github.com/typecho-en/Default-M-en" title="This is the latest version">Check for updates</a></div>');
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('Logo URL'), _t('Enter a logo URL as favicon'));
    $form->addInput($logoUrl);   

}
