<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($category->getId(), 'category_edit', $category) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $category->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_root_id">
  <?php echo $category->getRootId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_lft">
  <?php echo $category->getLft() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rgt">
  <?php echo $category->getRgt() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_level">
  <?php echo $category->getLevel() ?>
</td>
