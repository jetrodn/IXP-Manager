

    <div class="btn-group btn-group-sm" role="group">

        <?php if( isset( $t->data[ 'params'][ "switch" ] ) ): ?>

            <?php if( $t->data[ 'params'][ "switch" ] ):

                /** @var Entities\Switcher $s */
                $s = D2EM::getRepository( Entities\Switcher::class )->find( $t->data[ 'params'][ "switch" ] );
            ?>

                <div class="btn-group btn-group-sm">

                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if( request()->is( 'switch-port/op-status/*' ) ): ?>

                            Live Port States (via SNMP poll)

                        <?php elseif( request()->is( 'switch-port/snmp-poll/*' ) ): ?>

                            View/Edit Ports (via SNMP poll)

                        <?php elseif( request()->is( 'switch-port/list' ) ): ?>

                            View/Edit Ports (database only)

                        <?php elseif( request()->is( 'switch-port/list-mau/*' ) ): ?>

                            Port MAU Detail (database only)

                        <?php else: ?>

                            Unknown action?

                        <?php endif; ?>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right">

                        <h6 class="dropdown-header">SNMP Actions</h6>

                        <a class="dropdown-item <?= !request()->is( 'switch-port/op-status/*' ) ?: 'active' ?> <?= $s->getActive() ?: 'a-disabled' ?>" href="<?= route( "switch-port@list-op-status", [ "switch" => $s->getId() ] ) ?>">
                            Live Port States
                        </a>
                        <a class="dropdown-item <?= !request()->is( 'switch-port/snmp-poll/*' ) ?: 'active' ?> <?= $s->getActive() ?: 'a-disabled' ?> " href="<?= route( "switch-port@snmp-poll", [ "switch" => $s->getId() ] ) ?>">
                            View / Edit Ports
                        </a>

                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Database Actions</h6>

                        <a class="dropdown-item <?= !request()->is( 'switch-port/list' ) ?: 'active' ?>" href="<?= route( "switch-port@list", [ "switch" => $s->getId() ] ) ?>">
                            View / Edit Ports
                        </a>

                        <?php if( $s->getMauSupported() ): ?>
                            <a class="dropdown-item <?= !request()->is( 'switch-port/list-mau/*' ) ?: 'active' ?>" href="<?= route( "switch-port@list-mau", [ "switch" => $s->getId() ] ) ?>">
                                Port MAU Detail
                            </a>
                        <?php endif; ?>

                    </div>

                </div>


            <?php endif; ?>


            <div class="btn-group btn-group-sm">

                <button type="button" class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $t->data[ 'params'][ "switch" ] ? $t->data[ 'params'][ "switches" ][ $t->data[ 'params'][ "switch" ] ] : "All Switches" ?>
                </button>

                <div class="dropdown-menu dropdown-menu-right scrollable-dropdown">

                    <a class="dropdown-item <?= $t->data[ 'params'][ "switch" ] ? "" : "active" ?>" href="<?= route( "switch-port@list" , [ "switch" => 0 ] ) ?>">
                        All Switches
                    </a>


                    <div class="dropdown-divider"></div>

                    <?php foreach( $t->data[ 'params'][ "switches" ] as $id => $name ): ?>

                        <a class="dropdown-item <?= isset( $t->data[ 'params'][ "switch" ]) && $t->data[ 'params'][ "switch" ] === $id ? 'active' : '' ?>" href="<?= route( $t->feParams->route_prefix . "@" . $t->feParams->route_action, [ "switch" => $id ] ) ?>"><?= $name ?></a>

                    <?php endforeach; ?>

                </div>

            </div>

            <a id="add-switch-port"  class="btn btn-white" href="<?= route($t->feParams->route_prefix.'@add' ) ?>">
                <span class="fa fa-plus"></span>
            </a>

        <?php endif; ?>

    </div>


