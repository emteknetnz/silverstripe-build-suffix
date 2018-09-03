<?php

if (Config::inst()->get('BuiltAtRequirementsBackend', 'useBackend') && !Director::isDev()) {
    Requirements::set_backend(new BuiltAtRequirementsBackend());
}
