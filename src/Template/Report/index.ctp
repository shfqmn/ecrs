<div class="container">
    <h3><?= __('Report') ?></h3>
    <?php if(!count($report)==0): ?>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>
                        <?= $this->Paginator->sort('reportDate') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('status') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('reason') ?>
                    </th>
                    <th class="actions">
                        <?= __('Actions') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($report as $report): ?>
                    <tr>

                        <td>
                            <?= h($report->reportDate) ?>
                        </td>

                        <td>
                            <?= h($report->status) ?>
                        </td>
                        <td>
                            <?= h($report->reason) ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller'=>'ReportPdf','action' => 'pdf', $report->id],['target'=>'_blank']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $report->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p>
                <?= $this->Paginator->counter() ?>
            </p>
        </div>
        <?php else: ?>
            <span>No report submited</span>
            <?php endif; ?>
</div>
