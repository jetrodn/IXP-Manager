<?php $this->layout( 'layouts/ixpv4' ) ?>

<?php $this->section( 'page-header-preamble' ) ?>
    Switches
    /
    Ports for <?= $t->s->getName() ?> (via SNMP)
<?php $this->append() ?>

<?php $this->section( 'page-header-postamble' ) ?>

    <?= $t->insert( "switch-port/page-header-preamble", [ "data" => [ "params" => [ "switch" => $t->s->getId(), "switches" => $t->switches ] ] , "feParams" => (object)[ "route_prefix" => "switch-port", "route_action" => "snmp-poll" ] ] ) ?>

<?php $this->append() ?>

<?php $this->section( 'content' ) ?>

<div class="row">

    <div class="col-sm-12">

        <?= $t->alerts() ?>


        <?php if( count( $t->ports ) ): ?>

            <nav id="filter-row" class="navbar navbar-expand-lg navbar-light bg-light mb-4 shadow-sm">
                <a class="navbar-brand" href="#">
                    With selected:
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <form class="navbar-form navbar-left form-inline">
                            <li class="nav-item mr-2">
                                <div class="form-group">
                                    <a href="#" class="btn btn-danger input-sp-action" id="poll-group-delete">
                                        Delete
                                    </a>
                                </div>
                            </li>
                            |
                            <li class="nav-item mr-2">
                                <div class="nav-link d-flex ">
                                    <label for="shared-type">Set type:</label>
                                    <select id="shared-type" name="shared-type" class="form-control input-sp-action">
                                        <option value="" label="Choose a type">Choose a type</option>
                                        <?php foreach( Entities\SwitchPort::$TYPES as $idx => $name ): ?>
                                            <option value="<?= $idx ?>" label="<?= $name ?>"><?= $name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </li>
                            |
                            <li class="nav-item mr-2">
                                <div class="nav-link">
                                    <a href="#" class="btn btn-success input-sp-action" id="poll-group-active">
                                        Set Active
                                    </a>
                                </div>
                            </li>
                            |
                            <li class="nav-item mr-2">
                                <div class="nav-link">
                                    <a href="#" class="btn btn-warning input-sp-action" id="poll-group-inactive">
                                        Set Inactive
                                    </a>
                                </div>
                            </li>

                            <div id="loading" class="form-group" style="margin-left: 10px"></div>
                        </form>

                    </ul>
                </div>
            </nav>

        <?php endif; ?>

        <table id="list-port" class="table table-bordered table-hover">

            <thead class="thead-dark">
                <tr>
                    <th>
                        <div class="d-flex">
                            <input type="checkbox" name="select-all" id="select-all" value="" />
                            <i id="checkbox-reverse" style="cursor: pointer" class="fa fa-retweet ml-2"></i>
                        </div>

                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Customer
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Alias
                    </th>
                    <th>
                        Active
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Status
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php if( count( $t->ports ) ): ?>
                    <?php foreach( $t->ports as $port ): ?>

                        <tr id="poll-tr-<?= $port[ "port" ]->getId() ?>" class="poll-tr">
                            <td>
                                <input type="checkbox" class="sp-checkbox" name="switch-port[<?= $port[ "port"]->getId() ?>]" id="switch-port-<?= $port[ "port"]->getId() ?>" value="<?= $port[ "port"]->getId() ?>" />
                            </td>
                            <td>
                                <?= $port[ "port"]->getIfName() ?>
                            </td>
                            <td>
                                <?php if( $port[ "port"]->getPhysicalInterface() ): ?>

                                    <?php $cust = $port[ "port"]->getPhysicalInterface()->getVirtualInterface()->getCustomer() ?>
                                    <a href="<?= route( 'customer@overview', [ 'id' => $cust->getId() , 'tab' => 'ports' ] ) ?>">
                                        <?= $cust->getShortname() ?>
                                    </a>

                                <?php endif; ?>
                            </td>
                            <td>
                                <?= $port[ "port"]->getName() ?>
                            </td>
                            <td>
                                <?= $port[ "port"]->getIfAlias() ?>
                            </td>
                            <td>
                                <?= $port[ "port"]->getActive() ? "Yes" : "No" ?>
                            </td>
                            <td>
                                <div style="float: left;">
                                    <select id="port-type-<?= $port[ "port"]->getId() ?>" style="width: 100px!important">
                                        <?php foreach( Entities\SwitchPort::$TYPES as $idx => $name ): ?>
                                            <option value="<?= $idx ?>" label="<?= $name ?>" <?= $port[ "port"]->getType() == $idx ? "selected='selected'" : "" ?>>
                                                <?= $name ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div id="port-type-state-<?= $port[ "port"]->getId() ?>" class="text-secondary ml-1 float-left" style="width: 25px; height: 25px"></div>
                            </td>

                            <td>
                                <?php if( $port[ "bullet" ] ==  "new" ): ?>
                                    <span class="badge badge-success">New</span>
                                <?php elseif( $port[ "bullet" ] ==  "db" ): ?>
                                    <span class="badge badge-danger">DB Only</span>
                                <?php endif; ?>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr align="center">
                        <td colspan="8">
                            <b>SNMP polling information failed or there are no Ethernet ports on this switch</b>
                        </td>
                    </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?php $this->append() ?>

<?php $this->section( 'scripts' ) ?>
<?= $t->insert( 'switch-port/js/snmp-poll' ); ?>
<?php $this->append() ?>
