<?php

if (Config::inst()->get('BuiltAtRequirementsBackend', 'use_backend')) {
    Requirements::set_backend(new BuiltAtRequirementsBackend());
}
