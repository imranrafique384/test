<td colspan="6">
  <?php echo __('%%id%% - %%name%% - %%root_id%% - %%lft%% - %%rgt%% - %%level%%', array('%%id%%' => link_to($category->getId(), 'category_edit', $category), '%%name%%' => $category->getName(), '%%root_id%%' => $category->getRootId(), '%%lft%%' => $category->getLft(), '%%rgt%%' => $category->getRgt(), '%%level%%' => $category->getLevel()), 'messages') ?>
</td>
