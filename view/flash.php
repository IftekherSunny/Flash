<?php $session = new \Sun\Session; ?>
<?php if ($session->has('flash_notification.message')) : ?>
    <?php if ($session->has('flash_notification.overlay')) : $session->pull('flash_notification.overlay') ?>
        <div class="modal modal-success fade flash-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?php echo $session->get('flash_notification.title') ?></h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $session->get('flash_notification.message') ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-<?php echo $session->get('flash_notification.dismissType') ?>" data-dismiss="modal"><?php echo $session->get('flash_notification.dismissText') ?></button>
                        <?php if($session->get('flash_notification.submitButton') == true) : ?>
                            <button type="button" class="btn btn-<?php echo $session->get('flash_notification.allowType') ?>"><?php echo $session->get('flash_notification.allowText') ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="alert alert-<?php echo $session->get('flash_notification.level') ?> fade in alert-slideup">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p><?php echo $session->pull('flash_notification.message') ?></p>
        </div>
    <?php endif; ?>
<?php endif; ?>