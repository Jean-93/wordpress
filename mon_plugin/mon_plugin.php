<?php
/**
 * Plugin Name: mon_pluggin
 */

function activateHook()
{
    error_log('Activation OK');
}
register_activation_hook(__file__, 'Activate OK');

function deactivateHook()
{
    error_log('Désactivation OK');
}
register_deactivation_hook(__file__, 'Desactivate OK');

function uninstallHook()
{
    error_log('Unistall OK');
}
register_uninstall_hook(__file__, 'Uninstall OK');