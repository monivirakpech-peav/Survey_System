<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Question> $questions
 */
?>
<div class="questions index content">
    <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Questions') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <!-- <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th> -->
                    <th><?= $this->Paginator->sort('expected_answer') ?></th>
                    <th><?= $this->Paginator->sort('survey_id') ?></th> 
                    <th><?= $this->Paginator->sort('question_type_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $question): ?>
                <tr>
                    <td><?= $this->Number->format($question->id) ?></td>
                    <td><?= h($question->description) ?></td>

                    <!-- <td><?= h($question->created) ?></td>
                    <td><?= h($question->modified) ?></td> -->

                    <td>
                                <ol>
                                    <?php foreach ($question->answers as $ab) : ?>
                                    <li><?= h($ab->description) ?></li>
                                    <?php endforeach; ?>
                                </ol>

                            
                    </td>

                    <td><?= $question->has('survey') ? $this->Html->link($question->survey->name, ['controller' => 'Surveys', 'action' => 'view', $question->survey->id]) : '' ?></td>
                    <td><?= $question->has('question_type') ? $this->Html->link($question->question_type->name, ['controller' => 'QuestionTypes', 'action' => 'view', $question->question_type->id]) : '' ?></td>
                    <td class="actions">

                        <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    

                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
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
