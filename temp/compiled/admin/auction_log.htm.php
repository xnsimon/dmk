<!-- $Id: auction_log.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<div class="form-div">
  <strong><?php echo $this->_var['lang']['label_act_name']; ?></strong><?php echo $this->_var['auction']['act_name']; ?> <strong><?php echo $this->_var['lang']['label_goods_name']; ?></strong><?php echo $this->_var['auction']['goods_name']; ?>
  <a href="auction.php?act=edit&id=<?php echo $this->_var['auction']['act_id']; ?>"> [ <?php echo $this->_var['lang']['view']; ?> ] </a>
</div>

<div class="list-div" id="listDiv">
  <table cellpadding="3" cellspacing="1">
    <tr>
      <th><?php echo $this->_var['lang']['bid_user']; ?></th>
      <th><?php echo $this->_var['lang']['bid_price']; ?></th>
      <th width="30%"><?php echo $this->_var['lang']['bid_time']; ?></th>
      <th><?php echo $this->_var['lang']['status']; ?></th>
    </tr>
    <?php $_from = $this->_var['auction_log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'log');$this->_foreach['fe_log'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fe_log']['total'] > 0):
    foreach ($_from AS $this->_var['log']):
        $this->_foreach['fe_log']['iteration']++;
?>
    <tr>
      <td><?php echo $this->_var['log']['user_name']; ?></td>
      <td align="right"><?php echo $this->_var['log']['formated_bid_price']; ?></td>
      <td align="center"><?php echo $this->_var['log']['bid_time']; ?></td>
      <td align="center"><?php if (($this->_foreach['fe_log']['iteration'] <= 1)): ?>OK<?php else: ?>&nbsp;<?php endif; ?></td>
    </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="4"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
</div>
<?php echo $this->fetch('pagefooter.htm'); ?>