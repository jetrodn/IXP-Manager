<?php $this->layout( 'layouts/ixpv4' );
/** @var object $t */
?>

<?php $this->section( 'page-header-preamble' ) ?>

    <a href="<?=  route( "customer@overview" , [ "id" => $t->c->getId() ] ) ?>" >
        <?= $t->ee( $t->c->getName() ) ?>
    </a>
    /
    Welcome Email

<?php $this->append() ?>


<?php $this->section( 'content' ) ?>

    <div class="row">

        <div class="col-md-12">

            <?= $t->alerts() ?>

            <div class="alert alert-info" role="alert">
                Please see the <a target="_blank" href="http://docs.ixpmanager.org/usage/customers/#welcome-emails">official documentation</a> for information on welcome emails and instructions on how to customise the content.
            </div>

            <legend>
                Send Welcome Email
            </legend>

            <?= Former::open()->method( 'POST' )
                ->action( route( 'customer@send-welcome-email' ) )
                ->addClass( 'col-md-12' );
            ?>
            <?= Former::text( 'to' )
                ->label( 'To' );
            ?>

            <?= Former::text( 'cc' )
                ->label( 'CC' );
            ?>

            <?= Former::text( 'bcc' )
                ->label( 'BCC' );
            ?>

            <?= Former::text( 'subject' )
                ->label( 'Subject' );
            ?>

            <div class="col-lg-offset-2 col-sm-offset-2">

                <ul class="nav nav-tabs">
                    <li role="presentation" class="nav-item">
                        <a class="tab-link-body-note nav-link active" href="#body">Body</a>
                    </li>
                    <li role="presentation" class="active nav-item">
                        <a class="tab-link-preview-note nav-link" href="#preview">Preview</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show" id="body">
                        <textarea class="form-control" style="font-family:monospace;" rows="30" id="message" name="message"><?= old( 'message' ) ?? $t->body ?></textarea>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="preview">
                        <div class="bg-light p-4 well-preview">
                            Loading...
                        </div>
                    </div>
                </div>

                <br><br>
            </div>

            <div class="col-sm-12 text-center mt-4 bg-light shadow-sm p-3">
                <?= Former::actions(
                    Former::primary_submit( 'Send Email' ),
                    Former::secondary_link( 'Cancel' )->href( route( "customer@overview" , [ "id" => $t->c->getId() ] ) )
                );
                ?>
            </div>

            <?= Former::hidden( 'id' )
                ->value( $t->c->getId() )
            ?>
            <?= Former::close() ?>


        </div>
    </div>


<?php $this->append() ?>