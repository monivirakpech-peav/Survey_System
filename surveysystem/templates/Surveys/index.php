<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Survey> $surveys
 */
?>
<div class="surveys index content">
    <?= $this->Html->link(__('New Survey'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Surveys') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('start_date') ?></th>
                    <th><?= $this->Paginator->sort('end_date') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surveys as $survey): ?>
                <tr>
                    <td><?= $this->Number->format($survey->id) ?></td>
                    <td><?= h($survey->name) ?></td>
                    <td><?= h($survey->start_date) ?></td>
                    <td><?= h($survey->end_date) ?></td>
                    <td><?= h($survey->created) ?></td>
                    <td><?= h($survey->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $survey->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $survey->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $survey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $survey->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
