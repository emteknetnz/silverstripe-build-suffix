<?php

if (
    (Director::isLive() && Config::inst()->get('BuiltAtRequirementsBackend', 'use_backend_live')) ||
    (Director::isTest() && Config::inst()->get('BuiltAtRequirementsBackend', 'use_backend_test')) ||
    (Director::isDev() && Config::inst()->get('BuiltAtRequirementsBackend', 'use_backend_dev'))
) {
    Requirements::set_backend(new BuiltAtRequirementsBackend());
}
