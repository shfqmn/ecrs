<div class="container">
    <h1>ANNOUNCEMENT</h1>
    <h3>List of College Activity for the Current Semester</h3>
    <ul class="list-group" id="announcements-list">
        <?php if(!empty($announcements)): ?>
            <?php foreach ($announcements as $announcement):?>
                <a href="<?= $this->Url->build(['action' => 'view',$announcement->id]) ?>">
                    <li class="list-group-item">
                        <h4> <?= h($announcement->datetime) ?></h4>
                        <h4><?= h($announcement->venue) ?></h4>
                        <p>
                            <?= $this->Text->truncate(
                            $announcement->title,
                            50,
                            [
                                'ellipsis' => '...',
                                'exact' => false,
    'html'=>true
                            ]
                        );?>
                        </p>
                    </li>
                </a>
                <?php endforeach; ?>
                    <?php else: ?> <span>List is empty</span>
                        <?php endif; ?>
    </ul>
</div>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p>
        <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
    </p>
</div>