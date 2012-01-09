<?php if ($this->_var['hot_goods']): ?>
<div class="box">
  <div class="box_2 centerPadd">
    <div class="itemTit Hot" id="itemHot"></div>
    <div id="show_hot_area" class="clearfix goodsBox">
    <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <div class="goodsItem">
        <span class="hot"></span>
        <a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a><br />
        <p><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
        <?php echo $this->_var['lang']['exchange_integral']; ?><font class="f1"><?php echo $this->_var['goods']['exchange_integral']; ?></font>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
  </div>
</div>
<div class="blank5"></div>
<?php endif; ?>
