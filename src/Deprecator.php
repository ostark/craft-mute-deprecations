<?php

namespace ostark\MuteDeprecations;

use craft\services\Deprecator as DeprecatorService;

/**
 * Class Deprecator service.
 *
 * A wrapper to mute Craft'S DeprecatorService
 */
class Deprecator extends DeprecatorService {

    /**
     * Logs a new deprecation error.
     *
     * @param string $key
     * @param string $message
     *
     * @return bool
     */
    public function log(string $key, string $message): bool
    {
        // mute Deprecator logs
        return true;
    }

}
