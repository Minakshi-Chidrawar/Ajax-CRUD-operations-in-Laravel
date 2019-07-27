<div class="col-md-4 col-md-offset-1">
    <div class="text-center margin-top">
        <div class="col-md-4">
            <input type="text" class="form-control" id="numberOfWinners" name="numberOfWinners"
                   required>
            <p id="errorSelectWinners" class="hidden selectWinnerError"></p>

            <button class="select-modal btn btn-primary marginTopForwardButton" id="selectWinner">
                <span class="glyphicon glyphicon-forward"></span>
            </button>
        </div>
        <?php echo e(csrf_field()); ?>

    </div>
</div>