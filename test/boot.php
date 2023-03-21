<?php
/**
 * Boot test environment
 *
 * SPDX-License-Identifier: MIT
 */

// Add boot
$d = dirname(dirname(__FILE__));
$d = sprintf('%s/boot.php', $d);
require_once($d);