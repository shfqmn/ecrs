<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<div class="container">
    <?= $this->Form->create($announcement) ?>
        <fieldset>
            <legend>
                <?= __('Add Announcement') ?>
            </legend>
            <?php
            echo $this->Form->control('datetime',['class'=>'form-control']);
            echo $this->Form->control('venue',['class'=>'form-control']);
            echo $this->Form->control('title',['class'=>'form-control']);
            echo $this->Form->control('details', ['type' => 'textarea','class'=>'form-control']);
        ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
</div>
<script>
    CKEDITOR.replace('details');
</script>