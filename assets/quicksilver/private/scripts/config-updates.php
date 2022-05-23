<?php

/**
 * @file
 * Execute drush deploy command.
 *
 * @see https://www.drush.org/latest/deploycommand/
 */

echo "Running drush deploy...\n";
passthru('drush deploy -y');
echo "Updates complete.\n";
