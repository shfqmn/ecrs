<div class="container">
    <h3><?= __('Announcements') ?></h3>
    <?php if(!count($announcements)==0): ?>
        <table class="table table-hover">
            <thead>
                <tr>

                    <th>
                        <?= $this->Paginator->sort('title') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('datetime') ?>
                    </th>
                    <th>
                        <?= $this->Paginator->sort('venue') ?>
                    </th>
                    <th class="actions">
                        <?= __('Actions') ?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($announcements as $announcement): ?>
                    <tr>

                        <td>
                            <?= h($announcement->title) ?>
                        </td>

                        <td>
                            <?= h($announcement->datetime) ?>
                        </td>
                        <td>
                            <?= h($announcement->venue) ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $announcement->id],['target'=>'_blank']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $announcement->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $announcement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $announcement->id)]) ?>
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
            <span>No announcements</span>
            <?php endif; ?>
</div>
