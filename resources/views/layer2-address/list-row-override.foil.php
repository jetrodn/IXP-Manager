
<?php
// due to how PHP Foil passes data, we reassign this so we can copy and paste normal list code if we want.
// see http://www.foilphp.it/docs/DATA/PASS-DATA.html
$row = $t->row;
?>

<tr>

    <td>
        <a href="<?= route( "customer@overview" , [ "id" => $row[ 'customerid' ] ] ) ?>">
            <?= $t->ee( $row['customer'] ) ?>
        </a>
    </td>

    <td>
        <?php if( strpos( $row['switchport'], ',' ) !== false ) {

            $ports = explode( ',', $row['switchport'] );
            asort( $ports, SORT_NATURAL );

            foreach( $ports as $port ) {
                echo $t->ee( $row['switchname'] ) . '::' . $t->ee( $port ) . '<br>';
            }

        } else {

            echo $t->ee( $row['switchname'] ) . '::' . $t->ee( $row[ 'switchport' ] ) ;

        } ?>
    </td>
    <td>
        <a href="<?= route( 'vlan@view' , [ 'id' => $row[ 'vlanid' ] ])?>">
            <?= $row['vlan'] ?>
        </a>
    </td>
    <td>
        <?= $t->ee( $row['ip4'] ) ?>
    </td>

    <td>
        <?= $t->ee( $row['ip6'] ) ?>
    </td>

    <td>
        <a id="view-l2a-<?= $row[ 'id' ] ?>" name="<?= $t->ee( $row[ 'mac' ] ) ?>" href="#" title="View">
            <?= $t->ee( $row[ 'mac' ] ) ?>
        </a>
    </td>

    <td>
        <?= $t->ee( $row['organisation'] ) ?>
    </td>


    <td>

        <div class="btn-group btn-group-sm">

            <a class="btn btn-white" href="<?= route( $t->feParams->route_prefix . '@forVlanInterface' , [ 'id' => $row[ 'vliid' ] ] ) ?>" title="Preview">
                <i class="fa fa-eye"></i>
            </a>

        </div>

    </td>

</tr>
