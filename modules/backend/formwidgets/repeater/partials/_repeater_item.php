<?php
    $groupCode = $useGroups ? $this->getGroupCodeFromIndex($indexValue) : '';
    $itemTitle = $useGroups ? $this->getGroupItemConfig($groupCode, 'name') : '';
    $itemIcon = $useGroups ? $this->getGroupItemConfig($groupCode, 'icon') : 'icon-sticky-note-o';
    $titleFrom = $useGroups ? $this->getGroupItemConfig($groupCode, 'titleFrom') : '';
    $itemDescription = $useGroups ? $this->getGroupItemConfig($groupCode, 'description') : '';
?>
<li
    <?= $itemTitle ? 'data-item-title="'.e(__($itemTitle)).'"' : '' ?>
    <?= $itemIcon ? 'data-item-icon="'.e($itemIcon).'"' : '' ?>
    <?= $itemDescription ? 'data-item-description="'.e(__($itemDescription)).'"' : '' ?>
    <?= $titleFrom ? 'data-title-from="'.$titleFrom.'"' : '' ?>
    class="field-repeater-item"
    data-repeater-index="<?= $indexValue ?>"
    data-repeater-group="<?= $groupCode ?>"
>
    <div class="repeater-header">
        <div class="repeater-item-title">
            <?= $itemTitle ? e(__($itemTitle)) : '' ?>
        </div>
        <?php if (!$this->previewMode): ?>
            <div class="repeater-item-checkbox">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="checked[]"
                    id="<?= $this->getId('item'.$indexValue) ?>"
                    value=""
                    title="<?= e(trans('backend::lang.list.check')) ?>"
                />
            </div>
            <div class="repeater-item-dropdown dropdown">
                <a href="javascript:;" class="repeater-item-menu" data-bs-toggle="dropdown">
                    <i class="octo-icon-cog"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
            </div>
            <?php if ($showReorder): ?>
                <div class="repeater-item-reorder">
                    <a href="javascript:;" class="repeater-item-handle <?= $this->getId('items') ?>-handle">
                        <i class="octo-icon-list-reorder"></i>
                    </a>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
    <div class="repeater-content"
        data-control="formwidget"
        data-refresh-handler="<?= $this->getEventHandler('onRefresh') ?>"
        data-refresh-data="'_repeater_index': '<?= $indexValue ?>', '_repeater_group': '<?= $groupCode ?>'"
    >
        <?= $widget->renderFields($widget->getFields()) ?>
        <input type="hidden" name="<?= $widget->arrayName ?>[_index]" value="<?= $indexValue ?>" />
        <?php if ($useGroups): ?>
            <input type="hidden" name="<?= $widget->arrayName ?>[<?= $groupKeyFrom ?>]" value="<?= $groupCode ?>" />
        <?php endif ?>
        <?php if ($useRelation): ?>
            <input type="hidden" name="<?= $widget->arrayName ?>[_id]" value="<?= $widget->model->getKey() ?>" />
        <?php endif ?>
    </div>
</li>
