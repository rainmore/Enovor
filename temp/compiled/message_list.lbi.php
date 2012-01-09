<div class="box">
     <div class="box_1">
      <h3><span><?php echo $this->_var['lang']['message_board']; ?></span></h3>
      <div class="boxCenterList">
      <?php $_from = $this->_var['msg_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
      <div class="f_l" style="width:100%; position:relative;">
      [<b><?php echo $this->_var['msg']['msg_type']; ?></b>]&nbsp;<?php echo $this->_var['msg']['user_name']; ?><?php if ($this->_var['msg']['user_name'] == ''): ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?>：<?php if ($this->_var['msg']['id_value'] > 0): ?><?php echo $this->_var['lang']['feed_user_comment']; ?><b><a class="f3" href="<?php echo $this->_var['msg']['goods_url']; ?>" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a></b><?php endif; ?><font class="f4"><?php echo $this->_var['msg']['msg_title']; ?></font> (<?php echo $this->_var['msg']['msg_time']; ?>)<?php if ($this->_var['msg']['comment_rank'] > 0): ?><img style="position:absolute; right:0px;" src="themes/default/images/stars<?php echo $this->_var['msg']['comment_rank']; ?>.gif" alt="<?php echo $this->_var['msg']['comment_rank']; ?>" /><?php endif; ?>
      </div>
      <div class="msgBottomBorder word">
      <?php echo $this->_var['msg']['msg_content']; ?><br>
      <?php if ($this->_var['msg']['re_content']): ?>
       <font class="f2"><?php echo $this->_var['lang']['shopman_reply']; ?></font><br />
       <?php echo $this->_var['msg']['re_content']; ?>
      <?php endif; ?>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </div>
  </div>
</div>
<div class="blank5"></div>




