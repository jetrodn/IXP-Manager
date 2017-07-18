#
# This file contains Nagios configuration for monitoring Birdseye BGP sessions
#
# WARNING: this file is automatically generated using the
#   api/v4/nagios/birdseye-bgp-sessions/{vlanid}/{protocol}/{type} API call to IXP Manager.
#
# Any local changes made to this script will be lost.
#
# See: http://docs.ixpmanager.org/features/nagios/
#
# You should not need to edit these files - instead use your own custom skins. If
# you can't effect the changes you need with skinning, consider posting to the mailing
# list to see if it can be achieved / incorporated.
#
# For VLAN id <?= $t->vlan->getId() ?> - <?= $t->vlan->getName() ?>; ipv<?= $t->protocol ?>; type: <?= $t->typeName . "\n" ?>
#
# Generated: <?= date( 'Y-m-d H:i:s' ) . "\n" ?>
#
#
# The following objects are used by inheritance here and need to be defined by your own configuration:
#
# 1. Service definition: <?= $t->service_definition ?>.
#
#
# define service {
#     name                    <?= $t->service_definition . "\n" ?>
#     service_description     Member Bird BGP Sessions
#     check_period            24x7
#     max_check_attempts      10
#     check_interval          5
#     retry_check_interval    1
#     contact_groups          admins
#     notification_interval   120
#     notification_period     24x7
#     notification_options    w,u,c,r
#     register                0
#     check_command           check_birdseye_bgp_session!$_SERVICEAPIURL!$_SERVICEPROTOCOL
# }
#
# You will also need a check command:
#
# define command{
#     command_name    check_birdseye_bgp_session
#     command_line    /path/to/nagios-check-birdseye-bgp-sessions.php -a $ARG1$ -p $ARG2$ -n
# }
#

<?php
    // some arrays for later:
    $all       = [];
    $byrouter  = [];

    foreach( $t->vlis as $vli ):
?>
###############################################################################################
###
### <?= $t->typeName ?> Sessions for <?= $vli['cname'] . "\n" ?>
###
### <?= $vli['location_name'] ?> / <?= $vli['abrevcname'] ?> / <?=  $vli['sname'] ?>.
###

<?php
if( !$vli['enabled'] || !$vli['address'] ) {
    echo "\n\n ## ipv{$t->protocol} not enabled / no address configured, skipping\n\n";
    continue;
}

if( $t->type == \Entities\Router::TYPE_ROUTE_SERVER && !$vli['rsclient'] ) {
    echo "\n\n ## not enabled as an rsclient, skipping\n\n";
    continue;
} else if( $t->type == \Entities\Router::TYPE_ROUTE_COLLECTOR && !$vli['monitorrcbgp'] ) {
    echo "\n\n ## not enabled for route collector session monitoring, skipping\n\n";
    continue;
} else if( $t->type == \Entities\Router::TYPE_AS112 && !$vli['as112client'] ) {
    echo "\n\n ## not enabled for as112, skipping\n\n";
    continue;
} else if( $t->type == \Entities\Router::TYPE_OTHER  ) {
    echo "\n\n ## unsupported router type, skipping\n\n";
    continue;
}

$hostname = $t->nagiosHostname( $vli['abrevcname'], $vli['autsys'], $t->protocol, $vli['vid'], $vli['vliid'] );
$protocol = sprintf( "pb_%04d_as%d", $vli['vliid'], $vli['autsys'] );

$all[]                                = $hostname;

    foreach( $t->routers as $r ):
        $byrouter[ $r->getHandle() ][] = $hostname;

?>

### Router: <?= $r->getName() ?> / <?= $r->getPeeringIP() ?>.

define service     {
    use                     <?= $t->service_definition . "\n" ?>
    host_name               <?= $hostname . "\n" ?>
    service_description     BGP session to <?= $r->getHandle() ?> (<?= $r->getName() ?>)
    _api_url                <?= $r->getApi() . "\n" ?>
    _protocol               <?= $protocol . "\n" ?>
}

    <?php endforeach; ?>

<?php endforeach; ?>



###############################################################################################
###############################################################################################
###############################################################################################
###############################################################################################
###############################################################################################
###############################################################################################


###############################################################################################
###
### Group: by VLAN
###
###
###

<?php asort( $all ); ?>

define hostgroup {
    hostgroup_name  birdseye-<?= $t->typeShort ?>-bgp-sessions-vlanid-<?= $t->vlan->getId() ?>-ipv<?= $t->protocol ?>-all
    alias           All Birdseye <?= $t->typeName ?> IPv<?= $t->protocol ?> Sessions for VLAN <?= $t->vlan->getName() . "\n" ?>
    members         <?= $t->softwrap( $all, 1, ', ', ', \\', 20 ) ?>

}


###############################################################################################
###
### Group: by router
###
###
###

<?php foreach( $byrouter as $k => $hosts ):
    asort( $hosts );
    ?>

define hostgroup {
    hostgroup_name  birdseye-<?= $t->typeShort ?>-bgp-sessions-vlanid-<?= $t->vlan->getId() ?>-ipv<?= $t->protocol ?>-<?= $k . "\n" ?>
    alias           All Birdseye <?= $t->typeName ?> IPv<?= $t->protocol ?> Sessions for VLAN <?= $t->vlan->getName() ?> on <?= $r->getHandle() ?>.
    members         <?= $t->softwrap( $hosts, 1, ', ', ', \\', 20 ) ?>

}

<?php endforeach; ?>

### END ###

