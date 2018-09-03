<?php

if (Config::inst()->get('BuiltAtRequirementsBackend', 'useBackend')) {
    Requirements::set_backend(new BuiltAtRequirementsBackend());
}
