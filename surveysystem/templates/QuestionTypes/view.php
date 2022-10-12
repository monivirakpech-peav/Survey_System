<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\QuestionType $questionType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question Type'), ['action' => 'edit', $questionType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question Type'), ['action' => 'delete', $questionType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Question Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questionTypes view content">
            <h3><?= h($questionType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($questionType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($questionType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($questionType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($questionType->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Questions') ?></h4>
                <?php if (!empty($questionType->questions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Survey Id') ?></th>
                            <th><?= __('Question Type Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($questionType->questions as $questions) : ?>
                        <tr>
                            <td><?= h($questions->id) ?></td>
                            <td><?= h($questions->description) ?></td>
                            <td><?= h($questions->created) ?></td>
                            <td><?= h($questions->modified) ?></td>
                            <td><?= h($questions->survey_id) ?></td>
                            <td><?= h($questions->question_type_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questions->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
