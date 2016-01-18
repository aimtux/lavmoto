<div id="confModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
            </div>
            <?php echo Form::open(['url' => $route . $id . $ids]); ?>

                    <?php echo Form::hidden('_method', 'DELETE'); ?>

                    
            <div class="modal-body">
                <h4>Yakin data akan dihapus ?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
            </div>
            <?php echo Form::close(); ?>

        </div>
    </div>
</div>