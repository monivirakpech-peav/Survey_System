<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Survey $survey
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Survey'), ['action' => 'edit', $survey->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Survey'), ['action' => 'delete', $survey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $survey->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Surveys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Survey'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="surveys view content">
            <h3><?= h($survey->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($survey->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($survey->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Date') ?></th>
                    <td><?= h($survey->start_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Date') ?></th>
                    <td><?= h($survey->end_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($survey->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($survey->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($survey->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('List Questions') ?></h4>
                <?php if (!empty($survey->questions)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Question Description') ?></th>
                            <!-- <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th> -->
                            <!-- <th><?= __('Survey Id') ?></th> -->
                            <th><?= __('Question Type') ?></th>

                            <th><?= __('Expected Answer') ?></th> 
                            
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($survey->questions as $questions) : ?>
                        <tr>
                            <td><?= h($questions->id) ?></td>
                            <td><?= h($questions->description) ?></td>

                            <!-- <td><?= h($questions->created) ?></td>
                            <td><?= h($questions->modified) ?></td> -->
                            <!-- <td><?= h($questions->survey_id) ?></td> -->

                            <td><?= h($questions->question_type->name) ?></td>


                            <td>
                                <ol>
                                    <?php foreach ($questions->answers as $aaa) : ?>
                                    <li><?= h($aaa->description) ?></li>
                                    <?php endforeach; ?>
                                </ol>

                            </td>
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
