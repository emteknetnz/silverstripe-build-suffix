<?php

class BuiltAtSiteConfigExtension extends DataExtension
{
    private static $db = array(
        'BuiltAt' => 'SS_Datetime'
    );

    public function requireDefaultRecords()
    {
        parent::requireDefaultRecords();
        $config = SiteConfig::current_site_config();
        $config->BuiltAt = SS_Datetime::now()->Rfc2822();
        $config->write();
    }
}
