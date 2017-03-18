<?php
$myTemplates = [
    'inputContainer' => '<div class="form-group">{{content}}</div>',
    'inputContainerError' => '<div class="form-group has-error">{{content}}{{error}}</div>'
];
$this->Form->templates($myTemplates);

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.5/js/jquery.tablesorter.min.js" integrity="sha256-qW1prHl/Pkqu4uMxFepBr/umy73wqs47F8ubIqK0w1A=" crossorigin="anonymous"></script>
    <div class="row">
        <?=$this->Form->create(null,['class'=>'form-inline']);?>
            <?= $this->Form->control('reportDate',['class'=>'form-control inline','type'=>'text','id'=>'month-select','label'=>'Report Date']); ?>
                <button class="btn btn btn-default" type="submit">Submit</button>

                <?= $this->Form->end() ?>
    </div>
    <script>
        $('#month-select').datetimepicker({
            format: 'MMMM, YYYY',
            viewMode: 'months'
        });

    </script>

    <div class="row" style="padding-top:20px">
        <?php if(!count($users)==0): ?>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Submited</th>
                    <th>Actions</th>
                </tr>
                <?php foreach($users as $i=>$user): ?>
                    <tr>
                        <td>
                            <?=$i+1?>
                        </td>
                        <td>
                            <?= $user->name ?>
                        </td>
                        <td>
                            <?= empty($user->submited)? 'NO':'YES' ?>
                        </td>
                        <td>
                            <?php foreach($user->submited as $j=>$report): ?>
                                <span>Report #<?=$i+1?> :</span>
                                <span><?= $this->Html->link('View',['plugin'=>false,'controller'=>'ReportPdf','action'=>'pdf',$report->id],['target'=>'_blank'])?></span>
                                <span><?= $this->Html->link('Action',['plugin'=>false,'controller'=>'Report','action'=>'actions',$report->id],['target'=>'_blank'])?></span>
                                <?php endforeach; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </table>
            <?php else: ?>
                <span>No report submited</span>
                <?php endif; ?>
    </div>
