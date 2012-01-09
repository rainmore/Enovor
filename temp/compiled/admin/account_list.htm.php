<!-- $Id: account_list.htm 14928 2008-10-06 09:25:48Z testyang $ -->
<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>

<div class="form-div">
<form method="post" action="account_log.php?act=list&user_id=<?php echo $_GET['user_id']; ?>" name="searchForm">
  <select name="account_type" onchange="document.forms['searchForm'].submit()">
    <option value="" <?php if ($this->_var['account_type'] == ''): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['all_account']; ?></option>
    <option value="user_money" <?php if ($this->_var['account_type'] == 'user_money'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['user_money']; ?></option>
    <option value="frozen_money" <?php if ($this->_var['account_type'] == 'frozen_money'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['frozen_money']; ?></option>
    <option value="rank_points" <?php if ($this->_var['account_type'] == 'rank_points'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['rank_points']; ?></option>
    <option value="pay_points" <?php if ($this->_var['account_type'] == 'pay_points'): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['lang']['pay_points']; ?></option>
  </select>
  <strong><?php echo $this->_var['lang']['label_user_name']; ?></strong><?php echo $this->_var['user']['user_name']; ?>
  <strong><?php echo $this->_var['lang']['label_user_money']; ?></strong><?php echo $this->_var['user']['formated_user_money']; ?>
  <strong><?php echo $this->_var['lang']['label_frozen_money']; ?></strong><?php echo $this->_var['user']['formated_frozen_money']; ?>
  <strong><?php echo $this->_var['lang']['label_rank_points']; ?></strong><?php echo $this->_var['user']['rank_points']; ?>
  <strong><?php echo $this->_var['lang']['label_pay_points']; ?></strong><?php echo $this->_var['user']['pay_points']; ?>
  </form>
</div>

<form method="post" action="" name="listForm">
<div class="list-div" id="listDiv">
<?php endif; ?>

  <table cellpadding="3" cellspacing="1">
    <tr>
      <th width="20%"><?php echo $this->_var['lang']['change_time']; ?></th>
      <th width="30%"><?php echo $this->_var['lang']['change_desc']; ?></th>
      <th><?php echo $this->_var['lang']['user_money']; ?></th>
      <th><?php echo $this->_var['lang']['frozen_money']; ?></th>
      <th><?php echo $this->_var['lang']['rank_points']; ?></th>
      <th><?php echo $this->_var['lang']['pay_points']; ?></th>
    </tr>
    <?php $_from = $this->_var['account_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'account');if (count($_from)):
    foreach ($_from AS $this->_var['account']):
?>
    <tr>
      <td><?php echo $this->_var['account']['change_time']; ?></td>
      <td><?php echo htmlspecialchars($this->_var['account']['change_desc']); ?></td>
      <td align="right">
        <?php if ($this->_var['account']['user_money'] > 0): ?>
          <span style="color:#0000FF">+<?php echo $this->_var['account']['user_money']; ?></span>
        <?php elseif ($this->_var['account']['user_money'] < 0): ?>
          <span style="color:#FF0000"><?php echo $this->_var['account']['user_money']; ?></span>
        <?php else: ?>
          <?php echo $this->_var['account']['user_money']; ?>
        <?php endif; ?>
      </td>
      <td align="right">
        <?php if ($this->_var['account']['frozen_money'] > 0): ?>
          <span style="color:#0000FF">+<?php echo $this->_var['account']['frozen_money']; ?></span>
        <?php elseif ($this->_var['account']['frozen_money'] < 0): ?>
          <span style="color:#FF0000"><?php echo $this->_var['account']['frozen_money']; ?></span>
        <?php else: ?>
          <?php echo $this->_var['account']['frozen_money']; ?>
        <?php endif; ?>
      </td>
      <td align="right">
        <?php if ($this->_var['account']['rank_points'] > 0): ?>
          <span style="color:#0000FF">+<?php echo $this->_var['account']['rank_points']; ?></span>
        <?php elseif ($this->_var['account']['rank_points'] < 0): ?>
          <span style="color:#FF0000"><?php echo $this->_var['account']['rank_points']; ?></span>
        <?php else: ?>
          <?php echo $this->_var['account']['rank_points']; ?>
        <?php endif; ?>
      </td>
      <td align="right">
        <?php if ($this->_var['account']['pay_points'] > 0): ?>
          <span style="color:#0000FF">+<?php echo $this->_var['account']['pay_points']; ?></span>
        <?php elseif ($this->_var['account']['pay_points'] < 0): ?>
          <span style="color:#FF0000"><?php echo $this->_var['account']['pay_points']; ?></span>
        <?php else: ?>
          <?php echo $this->_var['account']['pay_points']; ?>
        <?php endif; ?>
      </td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="6"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>

<?php if ($this->_var['full_page']): ?>
</div>
</form>

<script type="text/javascript" language="javascript">
  <!--
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
      // 开始检查订单
      startCheckOrder();
  }
  
  //-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>