<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 * @var \Cake\Collection\CollectionInterface|string[] $surveys
 * @var \Cake\Collection\CollectionInterface|string[] $questionTypes
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questions form content">
            <?= $this->Form->create($question) ?>
            <fieldset>
                <legend><?= __('Add Question') ?></legend>
                <?php
                    echo $this->Form->control('description');
                    echo $this->Form->control('survey_id', ['options' => $surveys]);
                    echo $this->Form->control('question_type_id', ['options' => $questionTypes]);
                ?>

                <legend><?= __('Expected Answer')?></legend>
                <?php 
                    echo $this->Form->control('answers.0.description');
                    echo $this->Form->control('answers.1.description');
                    echo $this->Form->control('answers.2.description');
                ?>


            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
